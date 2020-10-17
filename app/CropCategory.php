<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CropCategory extends Model
{
    protected $table = 'crop_categories';

    public function crops()
    {
        return $this->hasMany('App\Crop');
    }

    public function approvalHarvest(){
        return $this->belongsTo('App\ApprovalHarvest');
    }
}
