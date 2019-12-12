<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theme_styles extends Model
{
    protected $fillable = [
        'StyleContents', 'fkThemeId', 'fkStyleId'
    ];
}
