<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CropCategory extends Model
{
    public function crops()
    {
        return $this->hasMany('App\Crop');
    }
}
