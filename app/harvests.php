<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harvests extends Model
{
    public $timestamps = false;

    protected $table = 'harvests';


    protected $fillable = ['category_id', 'variety_id', 'region_id', 'district_id', 'cultivatedLand', 'startDate','season', 'province_id', 'endDate', 'harvestedAmount', 'farmer_id', 'crop_id', 'external_id'];



    
    //relationships
    public function lands(){
        return $this->belongsTo('App\Land');
    }


    public function cultivation()
    {
        return $this->hasOne('App\cultivation', 'id', 'cultivation_id');
    }

    public function land()
    {
        return $this->hasOne('App\Land', 'id', 'land_id');
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

}
