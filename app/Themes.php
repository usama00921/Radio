<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Themes extends Model
{
     protected $fillable = [
        'content', 'title'
    ];
    public static  function getallforselect()
    {
    	$themes = Themes::all();
        $arrThemes = array(0=>'--Select--');
        foreach($themes as $theme)
        {
            $arrThemes[$theme->id] = $theme->title;
        }
        return $arrThemes;
    }
}
