<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    public function category()
    {
        return $this->belongsTo('App\CropCategory');
    }

    public function varieties()
    {
        return $this->hasMany('App\Variety');
    }

    public function approvalHarvest(){
        return $this->belongsTo('App\ApprovalHarvest', 'crop_id', 'id');
    }

    public function cultivation(){
        return $this->belongsToMany('App\cultivation');
    }
}
