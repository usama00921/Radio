<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\modules;
use App\moduletypes;
use App\modules_log;
use Auth;
use Session;

class ModulesController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules =  modules::orderby('id')->paginate(15); 
        return view('modules.index')->with('modules', $modules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = moduletypes::getallforselect();
        return view('modules.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate name, email and password fields
        $this->validate($request, [
            'txtTitle'=>'required|max:120',
            'lstType'=>'required',
            'txtdisplayrec'=>'required',
            'txtrank'=>'required',
            
        ]);
        
        
        $input = $request->only(['txtTitle', 'lstType', 'txtdisplayrec','txtdescription','txtrank']); 
        $input['moduleTitle'] = $input['txtTitle'];
        $input['fkModuleTypeId'] = $input['lstType'];
        $input['displayRec'] = $input['txtdisplayrec'];
        $input['description'] = $input['txtdescription'];
        $input['rank'] = $input['txtrank'];


        $page = modules::create($input);
        modules_log::log_Entry($page->id,'Created');


       
    //Redirect to the users.index view and display message
        return redirect()->route('modules.index')
            ->with('flash_message',
             'Module successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = moduletypes::getallforselect();
        $module = modules::findOrFail($id);
        return view('modules.edit', compact('types','module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate name, email and password fields
        $this->validate($request, [
            'txtTitle'=>'required|max:120',
            'lstType'=>'required',
            'txtdisplayrec'=>'required',
            'txtrank'=>'required',
            
        ]);
        $module = modules::findOrFail($id);

        $input = $request->only(['txtTitle', 'lstType', 'txtdisplayrec','txtdescription','txtrank']);  
        $module->fkModuleTypeId = $input['lstType'];        
        $module->moduleTitle = $input['txtTitle'];
        $module->displayRec = $input['txtdisplayrec'];
        $module->description= $input['txtdescription'];
        $module->rank = $input['txtrank'];
        $module->save();    
        modules_log::log_Entry($id,'Edited');
        

       
    //Redirect to the users.index view and display message
        return redirect()->route('modules.index')
            ->with('flash_message',
             'Module successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = modules::findOrFail($id);
        $module->delete();
        modules_log::log_Entry($id,'Deleted');

        return redirect()->route('modules.index')
            ->with('flash_message', 'Module successfully deleted');
    }
}
