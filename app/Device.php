<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function farmer()
    {
        return $this->belongsTo('App\Farmer', 'farmer_id');
    }
}
