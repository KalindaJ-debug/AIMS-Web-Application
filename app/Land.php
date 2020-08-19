<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $table = 'lands';

    protected $fillable = ['farmer_id','addressNo', 'streetName', 'laneName', 'town', 'city', 'gnd', 'province_id', 'district_id', 'postalCode', 'planningNumber', 'landRegistration', 'landExtend'];

    public function farmer()
    {
        return $this->belongsTo('App\Farmer');
    }
}
