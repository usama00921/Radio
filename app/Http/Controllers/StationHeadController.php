<?php

namespace App\Http\Controllers;

use App\Head;
use App\Station;
use App\StationHead;
use App\DB;
use Illuminate\Http\Request;

class StationHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('getchild');
    }

    public function index()
    {
        //echo "dddd";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
    $this->validate($req, 
        [
            'lstStyles'=>'required|digits_between:1,100'
            //'lstpageloc'=>'required',
            //'txtdContent'=>'required'
        ]);
    // $heads = Head::where
    //     ([
    //         ['column_1', '=', 'value_1'],
    //         ['column_2', '<>', 'value_2']
    //     ]);
                
    $id =  $req->station_id;
    $datasave = new StationHead;
    if(!empty($req->isactive))
        {
            $datasave->is_active ='1';
        }
    else{
            $datasave->is_active ='0';
        }

    if(is_numeric($req->listchild))
        {
           
            $count = StationHead::where('station_id', '=' ,$req->station_id)->
                                 where('head_id', '=' ,$req->listchild)->count();
            if($count ==1)
            {
                return redirect()->back()->withErrors(['Already Mapped!!']);
            }

            $datasave->head_id = $req->listchild;
        }
    else{
        $count = StationHead::where('station_id', '=' ,$req->station_id)->
                                 where('head_id', '=' ,$req->listchild)->count();
        
             if($count ==1)
                {
                    return redirect()->back()->withErrors(['msg', 'The Message']);
                }                     
            $datasave->head_id = $req->lstStyles;
        }
            $datasave->station_id = $req->station_id;
        
            $datasave->save();

    return redirect()->route('stationhead.show', $id)
        ->with('flash_message',
        'Page successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StationHead  $stationHead
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //echo $id;
        $heads = Head::getallforselect();
        $station = Station::where('id',$id)->first();

        //print($station);
       //echo $station->title;
        //die();
        
        $records = StationHead::all()->where('station_id', $id);
        //print_r($records);

        return view('stationhead',compact('id','station', 'records','heads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StationHead  $stationHead
     * @return \Illuminate\Http\Response
     */
    public function edit(StationHead $stationHead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StationHead  $stationHead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StationHead $stationHead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StationHead  $stationHead
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $station = StationHead::findOrFail($id);
        $station->delete();
        //page_log::log_Entry($id,'Deleted') ;

        

        return redirect()->route('stations.index')
            ->with('flash_message',
             'Page successfully deleted');
    }

    public function getchild($id)
    {
        
        $heads = Head::where('head_id',$id)->get(); 

        return view('stationheads.child',compact('heads'));
    }
}
