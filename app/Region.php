<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function districts()
    {
        return $this->belongsTo('App\District');
    }

    protected $table = 'regions';

    public function lands(){
        return $this->hasMany('App\Land', 'region_id', 'id');
    }
}
