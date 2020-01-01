<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = [
        'title', 'isactive'
    ];
    


    public static  function getallforselect()
    {
    	$stations = Station::all();
        $arrstations = array(0=>'--Select--');
        foreach($stations as $station)
        {
            $arrstations [$station->id] = $station->title;
        }
        return $arrstations;
    }

    








}
