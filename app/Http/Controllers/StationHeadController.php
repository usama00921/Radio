<?php

namespace App\Http\Controllers;

use App\Stations;
use App\Sectionhead;
use Illuminate\Http\Request;

class Head_stationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $sectionheads = Sectionhead::all();
        $station = Stations::all();
        //$sectionheads = DB::table('sectionheads')->get();
        //print_r($sectionheads);
        print_r ($sectionheads->id);
        die();
        return view('head_station')->with('sectionheads', 'station');


    }
}
