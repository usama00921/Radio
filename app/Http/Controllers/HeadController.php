<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Head;
use App\Themes;

use Illuminate\Http\Request;

class HeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
   public function __construct()
   {
       $this->middleware('auth');
   }





    public function index()
    {
        //
        $parentid = null;
        $heads = Head::where('head_id',null)->get(); 
       
        
        return view('Heads.index',compact('heads','parentid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $parentid = null;
        $heads = Head::getallforselect();        
        return view('Heads.create',compact('heads','parentid'));
    }
    public function createchild($parentid)
    {
        $heads = Head::getallforselect();        
        return view('Heads.create',compact('heads','parentid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $req)
    { 

        //Validate name, email and password fields
        $this->validate($req, [
            
            'title'=>'required|unique:heads'
        ]);
        $datasave = new Head;
    
        if(!empty($req->isactive)){

            $datasave->is_active ='1';
           
                }
        else {

            $datasave->is_active ='0';
           
            }
        
            $datasave->head_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->save();

    //Redirect to the users.index view and display message
        return redirect()->route('heads.index')
            ->with('flash_message',
             'Page successfully added.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\head  $sectiohead
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parentid = $id;
        $heads = Head::where('head_id',$id)->get(); 
       
        
        return view('Heads.index',compact('heads','parentid'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Head  $sectiohead
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
        $heads = Head::findOrFail($id);
        $heads_name = Head::getallforselect();
        return view('Heads.edit', compact('heads','heads_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\head  $sectiohead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //Validate name, email and password fields
        $this->validate($req, [
            'title'=>'required'
            //'lstpageloc'=>'required',
            //'txtdContent'=>'required'
        ]);
        $datasave = Head::findOrFail($id);

        
        if(!empty($req->isactive)){

            $datasave->is_active ='1';
           
                }
        else {

            $datasave->is_active ='0';
           
            }
        
            $datasave->head_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->save();
        
    //Redirect to the users.index view and display message
        return redirect()->route('heads.index')
            ->with('flash_message',
             'Page successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Head  $head
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Head::findOrFail($id);
        $page->delete();
        //page_log::log_Entry($id,'Deleted') ;

        return redirect()->route('heads.index')
            ->with('flash_message',
             'Page successfully deleted');
    }
}

