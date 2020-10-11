<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function regions()
    {
        return $this->hasMany('App\Region');
    }

    public function provinces()
    {
        return $this->belongsTo('App\Province');
    }

    protected $table = 'districts';

    public function lands()
    {
        return $this->hasMany('App\Land','district_id', 'id');
    }
}
