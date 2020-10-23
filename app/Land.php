<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{ 
    protected $table = 'lands';

    protected $fillable = ['farmer_id','addressNo', 'streetName', 'laneName', 'town', 'land_type_id', 'region_id', 'province_id', 'district_id', 'postalCode', 'planningNumber', 'landRegistration', 'landExtend'];

    public function farmer()
    {
        return $this->belongsTo('App\Farmer');
    }

    public function land_type(){
        return $this->belongsTo('App\LandType', 'land_type_id', 'id');
    }

    public function provinces(){
        return $this->belongsTo('App\Province', 'province_id', 'id');
    }

    public function districts(){
        return $this->belongsTo('App\District', 'district_id', 'id');
    }

    public function regions(){
        return $this->belongsTo('App\Region', 'region_id', 'id');
    }
    
    public function approvalHarvest(){
        return $this->belongsTo('App\ApprovalHarvest');
    }

    public function approvalCultivation(){
        return $this->belongsTo('App\ApprovalCultivation');
    }

    public function harvests(){
        return $this->hasMany('App\harvests', 'land_id', 'id');
    }

    public function cultivation(){
        return $this->hasMany('App\cultivation', 'land_id', 'id');
    }

}
