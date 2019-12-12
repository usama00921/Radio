<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Themes;
use Auth;
use Session;

class ThemesController extends Controller
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
        $themes = Themes::all(); 
        return view('themes.index')->with('themes', $themes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view('themes.create');
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
            'txtContent'=>'required',
            'txtTitle'=>'required|max:120'
        ]);
        
        $input = $request->only(['txtContent', 'txtTitle']); //Retreive the fields
        
        $themes = Themes::create(array('content'=>$input['txtContent'],'title'=>$input['txtTitle'])); //Retrieving Data

             
    //Redirect to the themes.index view and display message
        return redirect()->route('themes.index')
            ->with('flash_message',
             'Theme successfully added.');
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
        $theme = Themes::findOrFail($id);
      
        
        return view('themes.edit', compact('theme'));
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
            'txtContent'=>'required',
            'txtTitle'=>'required|max:120'
        ]);
        
        $input = $request->only(['txtContent', 'txtTitle']); //Retreive the fields
        
        $theme = Themes::findOrFail($id);
        $theme->content = $input['txtContent'];
        $theme->title = $input['txtTitle'];
        $theme->save();
             
        //Redirect to the themes.index view and display message
        return redirect()->route('themes.index')
            ->with('flash_message',
             'Theme successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
