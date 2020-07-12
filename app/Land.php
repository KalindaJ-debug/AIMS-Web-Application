<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    public function farmer()
    {
        return $this->belongsTo('App\Farmer');
    }
}
