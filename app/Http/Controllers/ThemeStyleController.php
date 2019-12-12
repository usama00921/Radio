<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\theme_styles;
use App\Themes;
use  App\style;
use Auth;
use Session;


class ThemeStyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function __construct(){
    $this->middleware(['auth','isAdmin']);
    }

    public function index()
    {
		$theme_styles =theme_styles::all();
        return view('theme_styles.index')->with('allThemeStyles', $theme_styles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $themes = Themes::getallforselect();
        $styles = style::getallforselect();
        
        return view('theme_styles.create',compact('themes','styles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'txtContent'=>'required',
            'lsttheme'=>'required',
            'lstStyles'=>'required'
        ]);
        
        $input = $request->only(['txtContent', 'lsttheme', 'lstStyles']); 
        

        $input['fkThemeId'] = $input['lsttheme'];
        $input['fkStyleId'] = $input['lstStyles'];
        $input['StyleContents'] = $input['txtContent'];
       

        $style = theme_styles::create($input); 

       
    //Redirect to the users.index view and display message
        return redirect()->route('theme_styles.index')
            ->with('flash_message',
             'Theme Style successfully added.');
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
        $theme_style = theme_styles::findOrFail($id);
        $themes = Themes::getallforselect();
        $styles = style::getallforselect();
        return view('theme_styles.edit',compact('theme_style','themes','styles'));
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
       $this->validate($request, [
            'txtContent'=>'required',
            'lsttheme'=>'required',
            'lstStyles'=>'required'
        ]);
        

        $input = $request->only(['txtContent', 'lsttheme', 'lstStyles']); 
        
        $theme_style = theme_styles::findOrFail($id);

        $theme_style->fkThemeId = $input['lsttheme'];
        $theme_style->fkStyleId = $input['lstStyles'];
        $theme_style->StyleContents = $input['txtContent'];
       

        $theme_style->save(); 

       
    //Redirect to the users.index view and display message
        return redirect()->route('theme_styles.index')
            ->with('flash_message',
             'Theme Style successfully added.');
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
