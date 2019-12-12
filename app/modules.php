<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modules extends Model
{
    protected $fillable = [
        'fkModuleTypeId', 'moduleTitle','displayRec','description', 'rank'
    ];
	 public static  function getallforselect($type)
    {
    	$modules = modules::where('fkModuleTypeId','=',$type)->get();
        $arrModules = array();
        foreach($modules as $module)
        {
            $arrModules[$module->id] = $module->moduleTitle;
        }
        return $arrModules;
    }
}
