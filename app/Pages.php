<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = [
        'title', 'metaKeyword','metaDescription','fkThemeId', 'url','contents','pageLocation', 'rank','parentPageId','externalLink', 'targetWindow'
    ];
    public static function getallforselect()
    {
    	$pages = Pages::all();
        $arrPages = array(0=>'--Select--');
        foreach($pages as $page)
        {
            $arrPages[$page->id] = $page->title;
        }
        return $arrPages;
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
