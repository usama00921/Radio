<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sectionhead extends Model
{
    //
    //protected $table = 'sectionheads';
    protected $fillable = [
        'title', 'isactive'
    ];
    public static function getallforselect()
    {
    	$sectionheads = sectionhead::all();
        $arrSectionheads = array(0=>'--Select--');
        foreach($sectionheads as $sectionhead)
        {
            $arrPages[$sectionhead->id] = $sectionhead->title;
        }
        return $arrSectionheads;
    }
    public static function getLocations()
    {
    	$arrLocations = array('Top'=>'Top','Footer'=>'Footer','Left'=>'Left','Right'=>'Right');
    	return $arrLocations;
    }
    public static function getTargets()
    {
    	$arrTargets = array('_blank'=>'_blank','_self'=>'_self','_parent'=>'_parent','_top'=>'_top');
    	return $arrTargets;
    }
    
}
