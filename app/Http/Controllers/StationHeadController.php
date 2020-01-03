<?php

namespace App\Http\Controllers;

use App\Head;
use App\Station;
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
        $this->middleware('auth');
    }

    public function index()
    {
        
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StationHead  $stationHead
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $heads = Head::getallforselect();
        $headall = Head::all(); 

       // print_r($heads);
       
        //die();
        
        $records = Head::all()->where('head_id', $id);
        

        return view('stationhead',compact('id','headall', 'records'));
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
    public function destroy(StationHead $stationHead)
    {
        //
    }
}
