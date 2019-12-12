<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Sectionhead;
use App\Themes;

use Illuminate\Http\Request;

class SectionheadController extends Controller
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
        $sectionheads = Sectionhead::all(); 
        //$sectionheads = DB::table('sectionheads')->get();
        //print_r($sectionheads);
        
        return view('sectionheads.index')->with('sectionheads', $sectionheads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $themes = Themes::getallforselect();       
        $sectionheads = Sectionhead::getallforselect();
        $sectionheadsLoc = Sectionhead::getLocations();
        $sectionheadsTarget = Sectionhead::getTargets();

        
        return view('sectionheads.create',compact('themes','sectionheads','sectionheadsLoc','sectionheadsTarget'));
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
            'sectionhead_id'=>'required|max:120',
            'title'=>'required'
            //'lstpageloc'=>'required',
            //'txtdContent'=>'required'
        ]);
    
        $input = $request->only(['sectionhead_id', 'title','isactive']); 
        $input['url'] = Str::slug($input['txtTitle'],'-');

        $input['sectionhead_id'] = $input['sectionhead_id'];
        $input['title'] = $input['title'];
        
        $input['fkThemeId'] = $input['lsttheme'];
        $input['contents'] = $input['txtdContent'];
        
        $input['rank'] = $input['txtrank'];
        if($input['lstparentpage'] > 0)
            $input['parentPageId'] =  $input['lstparentpage'] ;
        else
            $input['parentPageId'] =  0;
        $input['externalLink'] = $input['txtextlink'];
        $input['targetWindow'] = $input['lstTargetdWindow'];

        $page = sectionheads::create($input);
        //page_log::log_Entry($page->id,'Created') ;      

       
    //Redirect to the users.index view and display message
        return redirect()->route('sectionhead.index')
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
    public function edit(Sectionhead $id)
    {
        $sectionheads = sectionheads::findOrFail($id);
        $themes = Themes::getallforselect();       
        $sectionheads = sectionheads::getallforselect();
        $sectionheadsLoc = sectionheads::getLocations();
        $sectionheadsTarget = sectionheads::getTargets();
        return view('sectionheads.edit', compact('sectionheads','themes','sectionheads','sectionheadsLoc','sectionheadsTarget'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sectionhead  $sectiohead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sectionhead $sectionhead)
    {
        //Validate name, email and password fields
        $this->validate($request, [
            'sectionhead_id'=>'required|max:120',
            'title'=>'required'
            //'lstpageloc'=>'required',
            //'txtdContent'=>'required'
        ]);
        $page = sectionheads::findOrFail($id);

        $input = $request->only(['sectionhead_id', 'title','isactive']); 
        //$page->url = $input['txtTitle'];
        
        $page->title = $input['txtTitle'];
        $page->metaKeyword = $input['txtmetakeyword'];
        $page->metaDescription= $input['txtmetadescription'];
        $page->fkThemeId = $input['lsttheme'];
        $page->contents = $input['txtdContent'];
        $page->pageLocation = $input['lstpageloc'];
        $page->rank = $input['txtrank'];
        if($input['lstparentpage'] > 0)
            $page->parentPageId =  $input['lstparentpage'] ;
        else
            $page->parentPageId =  0;
        $page->externalLink = $input['txtextlink'];
        $page->targetWindow = $input['lstTargetdWindow'];
        $page->save();
        //page_log::log_Entry($id,'Edited') ;    
        

       
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
    public function destroy(Sectionhead $sectionhead)
    {
        $page = sectionheads::findOrFail($id);
        $page->delete();
        //page_log::log_Entry($id,'Deleted') ;

        return redirect()->route('sectionheads.index')
            ->with('flash_message',
             'Page successfully deleted');
    }
}

