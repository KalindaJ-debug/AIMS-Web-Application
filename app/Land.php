<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{ 
    protected $table = 'lands';

    protected $fillable = ['farmer_id','addressNo', 'streetName', 'laneName', 'town', 'land_type_id', 'gnd', 'province_id', 'district_id', 'postalCode', 'planningNumber', 'landRegistration', 'landExtend'];

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

}
