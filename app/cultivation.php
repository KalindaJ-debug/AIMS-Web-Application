<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cultivation extends Model
{
    public $timestamps = false;
    
    protected $table = 'cultivation';

    protected $fillable = ['category_id', 'variety_id', 'region_id', 'district_id', 'cultivatedLand', 'startDate','season', 'province_id', 'endDate', 'harvestedAmount', 'name'];
}
