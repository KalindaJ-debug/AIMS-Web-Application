<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function districts()
    {
        return $this->hasMany('App\District');
    }

    protected $table = 'provinces';

    public function lands()
    {
        return $this->hasMany('App\Land','province_id', 'id');
    }
}
