<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class style extends Model
{
    protected $fillable = ['styleTitle','StyleName'];


    public static  function getallforselect()
    {
    	$styles = style::all();
        $arrStyles = array(0=>'--Select--');
        foreach($styles as $style)
        {
            $arrStyles[$style->id] = $style->styleTitle;
        }
        return $arrStyles;
    }
}
