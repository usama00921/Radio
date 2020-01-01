<?php

namespace App\Http\Controllers;

use App\Stations;
use Illuminate\Http\Request;

class StationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $stations = Stations::all(); 
        
        // print_r($sectionheads);
        
        // return view('stations.create')->with('stations', $stations);
        $stations = Stations::all(); 
        
        return view('stations.index',compact('stations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $stations = Stations::getallforselect();
        
        
        return view('stations.create',compact('stations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $this->validate($req, [
            'title'=>'required'
            //'lstpageloc'=>'required',
            //'txtdContent'=>'required'
        ]);
        $datasave = new Stations;
    
        if($req->isactive == '1'){


            $datasave->station_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->isactive ='1';
            $datasave->save();
                }
        else {
            $datasave->station_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->isactive ='0';
            $datasave->save();
                }
        
        return redirect()->route('stations.create')
            ->with('flash_message',
             'Page successfully added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stations  $stations
     * @return \Illuminate\Http\Response
     */
    public function show(Stations $stations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stations  $stations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stations = Stations::findOrFail($id);
        $stations_name = Stations::getallforselect(); 
        //echo $stations;
        
        
        return view('stations.edit', compact('stations', 'stations_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stations  $stations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            'title'=>'required'
            //'lstpageloc'=>'required',
            //'txtdContent'=>'required'
        ]);
        $datasave = Stations::findOrFail($id);

        
        if(!isset($req->isactive)){


            $datasave->station_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->isactive ='1';
            $datasave->save();
                }
        else {
            $datasave->station_id = $req->lstStyles;
            $datasave->title = $req->title;
            $datasave->isactive ='1';
            $datasave->save();
                }
        
        return redirect()->route('stations.create')
            ->with('flash_message',
             'Page successfully added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stations  $stations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $station = Stations::findOrFail($id);
        $station->delete();
        //page_log::log_Entry($id,'Deleted') ;

        return redirect()->route('stations.index')
            ->with('flash_message',
             'Page successfully deleted');
    }
}
