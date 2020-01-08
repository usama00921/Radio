<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    
    protected $fillable = [
        'title', 'isactive','head_id'
    ];
    public static  function getallforselect()
    {
    	$heads = Head::all();
        $arrHeads = array(''=>'--Select--');
        foreach($heads as $head)
        {
            if(!($head->head_id)){
            $arrHeads [$head->id] = $head->title;
        }
        }
        return $arrHeads;
    }

    public function parent()
    {
        return $this->belongsTo(self::class,'head_id');
    }
    public function heads()
    {
    	return $this->hasMany(self::class);
    }
    
}
