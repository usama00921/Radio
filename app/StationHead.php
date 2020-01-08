<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StationHead extends Model
{
    protected $fillable = [
        'station_id', 'head_id','is_active'
    ];
}
