<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Themes;
use App\page_log;
use Illuminate\Support\Str;
use Auth;
use Session;
class PagesController extends Controller
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
         $pages = Pages::all(); 
        return view('pages.index')->with('pages', $pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $themes = Themes::getallforselect();       
        $pages = Pages::getallforselect();
        $pagesLoc = Pages::getLocations();
        $pagesTarget = Pages::getTargets();

        
        return view('pages.create',compact('themes','pages','pagesLoc','pagesTarget'));
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
            'lsttheme'=>'required',
            'lstpageloc'=>'required',
            'txtrank'=>'required',
            'txtdContent'=>'required'
        ]);
        
        $input = $request->only(['txtTitle', 'txtmetakeyword', 'txtmetadescription','lsttheme', 'txtdContent', 'lstpageloc','txtrank','lstparentpage','txtextlink','lstTargetdWindow']); 
        $input['url'] = Str::slug($input['txtTitle'],'-');
        
        $input['title'] = $input['txtTitle'];
        $input['metaKeyword'] = $input['txtmetakeyword'];
        $input['metaDescription'] = $input['txtmetadescription'];
        $input['fkThemeId'] = $input['lsttheme'];
        $input['contents'] = $input['txtdContent'];
        $input['pageLocation'] = $input['lstpageloc'];
        $input['rank'] = $input['txtrank'];
        if($input['lstparentpage'] > 0)
            $input['parentPageId'] =  $input['lstparentpage'] ;
        else
            $input['parentPageId'] =  0;
        $input['externalLink'] = $input['txtextlink'];
        $input['targetWindow'] = $input['lstTargetdWindow'];

        $page = Pages::create($input);
        //page_log::log_Entry($page->id,'Created') ;      

       
    //Redirect to the users.index view and display message
        return redirect()->route('pages.index')
            ->with('flash_message',
             'Page successfully added.');
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
        $page = Pages::findOrFail($id);
        $themes = Themes::getallforselect();       
        $pages = Pages::getallforselect();
        $pagesLoc = Pages::getLocations();
        $pagesTarget = Pages::getTargets();
        return view('pages.edit', compact('page','themes','pages','pagesLoc','pagesTarget'));
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
            'lsttheme'=>'required',
            'lstpageloc'=>'required',
            'txtrank'=>'required',
            'txtdContent'=>'required'
        ]);
        $page = Pages::findOrFail($id);

        $input = $request->only(['txtTitle', 'txtmetakeyword', 'txtmetadescription','lsttheme', 'txtdContent', 'lstpageloc','txtrank','lstparentpage','txtextlink','lstTargetdWindow']); 
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
        return redirect()->route('pages.index')
            ->with('flash_message',
             'Page successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $page = Pages::findOrFail($id);
        $page->delete();
        //page_log::log_Entry($id,'Deleted') ;

        return redirect()->route('pages.index')
            ->with('flash_message',
             'Page successfully deleted');
    }
}
