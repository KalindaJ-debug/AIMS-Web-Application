<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class external_factors extends Model
{
    public $timestamps = false;
    
    protected $table = 'external_factors';

    protected $fillable = ['harvest_id', 'reason'];
}
