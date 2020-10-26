<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    protected $table = 'crops';

    public function crop_categories()
    {
        return $this->belongsTo('App\CropCategory', 'type_id', 'id');
    }

    public function varieties()
    {
        return $this->hasMany('App\Variety', 'crop_id', 'id');
    }

    public function approvalHarvest(){
        return $this->belongsTo('App\ApprovalHarvest', 'crop_id', 'id');
    }

    public function cultivation(){
        return $this->belongsToMany('App\cultivation');
    }
}
