<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    
    protected $fillable = [
        'title', 'isactive'
    ];
    public static  function getallforselect()
    {
    	$heads = Head::all();
        $arrHeads = array(''=>'--Select--');
        foreach($heads as $head)
        {
            $arrHeads [$head->id] = $head->title;
        }
        return $arrHeads;
    }

    
}
