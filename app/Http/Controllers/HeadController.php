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
        $heads = Head::all(); 
        //$sectionheads = DB::table('sectionheads')->get();
        //print_r($sectionheads);
        
        return view('head.index',compact('heads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          
        $sectionheads = Sectionhead::getallforselect();
        

        
        return view('sectionheads.create',compact('sectionheads'));
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
            
            'title'=>'required'
        ]);
        $datasave = new Sectionhead;
    
        if($req->isactive == '1'){


            $datasave->Sectionhead_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->isactive ='1';
            $datasave->save();
                }
        else {
            $datasave->Sectionhead_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->isactive ='0';
            $datasave->save();
            }
        
            
    //Redirect to the users.index view and display message
        return redirect()->route('sectionheads.index')
            ->with('flash_message',
             'Page successfully added.');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sectionhead  $sectiohead
     * @return \Illuminate\Http\Response
     */
    public function show(Sectionhead $sectionhead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sectionhead  $sectiohead
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
        $sectionheads = Sectionhead::findOrFail($id);
        $secheads_name = Sectionhead::getallforselect();
        return view('sectionheads.edit', compact('sectionheads','secheads_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sectionhead  $sectiohead
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
        $datasave = Sectionhead::findOrFail($id);

        
        if(!isset($req->isactive)){


            $datasave->Sectionhead_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->isactive ='1';
            $datasave->save();
                }
        else {
            $datasave->Sectionhead_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->isactive ='1';
            $datasave->save();
                }
        
        
    //Redirect to the users.index view and display message
        return redirect()->route('sectionheads.index')
            ->with('flash_message',
             'Page successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sectionhead  $sectiohead
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Sectionhead::findOrFail($id);
        $page->delete();
        //page_log::log_Entry($id,'Deleted') ;

        return redirect()->route('sectionheads.index')
            ->with('flash_message',
             'Page successfully deleted');
    }
}

