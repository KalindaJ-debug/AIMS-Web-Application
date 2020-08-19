<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harvestDetails extends Model
{
    public $timestamps = false;
    
    protected $table = 'harvest_details';

    protected $fillable = ['season', 'name', 'variety', 'sdate', 'edate', 'region', 'district', 'harvest', 'hect'];
}
