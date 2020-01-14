<?php

namespace App;
use App\Station;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'title', 'is_active','station_id','type'
    ];
    public function station()
    {
        return $this->belongsTo('App\Station');
    }
}
