<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harvests extends Model
{
    public $timestamps = false;

    protected $table = 'harvests';

<<<<<<< HEAD
    protected $fillable = ['category_id', 'variety_id', 'region_id', 'district_id', 'cultivatedLand', 'startDate','season', 'province_id', 'endDate', 'harvestedAmount', 'farmer_id', 'crop_id', 'external_id'];
=======
    protected $fillable = ['category_id', 'variety_id', 'region_id', 'district_id', 'cultivatedLand', 'startDate','season', 'province_id', 'endDate', 'harvestedAmount', 'farmer_id', 'crop_id'];
    
    //relationships
    public function lands(){
        return $this->belongsTo('App\Land');
    }
>>>>>>> 92a143a8e42cb5aee16df711a665ee0dc25b65c0
}
