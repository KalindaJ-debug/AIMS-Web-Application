<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cultivation extends Model
{
    public $timestamps = false;
    
    protected $table = 'cultivation';

    public function approvalHarvest()
    {
        return $this->belongsTo('App\ApprovalHarvest');
    }

    public function category()
    {
        return $this->hasOne('App\CropCategory', 'id');
    }

    public function crop()
    {
        return $this->hasOne('App\Crop', 'id');
    }

    public function variety()
    {
        return $this->hasOne('App\Variety', 'id');
    }

    public function land()
    {
        return $this->hasOne('App\Land', 'id', 'land_id');
    }
    protected $fillable = ['cultivation_id', 'category_id', 'variety_id', 'region_id', 'district_id', 'cultivatedLand', 'startDate','season', 'province_id', 'endDate', 'harvestedAmount', 'farmer_id', 'crop_id'];
}
