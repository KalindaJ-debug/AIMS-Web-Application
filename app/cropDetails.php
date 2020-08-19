<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cropDetails extends Model
{
    public $timestamps = false;
    
    protected $table = 'crop_details';

    protected $fillable = ['season', 'name', 'variety', 'sdate', 'edate', 'Province', 'region', 'district', 'harvest', 'hect'];
}
