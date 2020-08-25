<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cultivation extends Model
{
    public $timestamps = false;
    
    protected $table = 'cultivation';

    protected $fillable = ['name', 'variety', 'region', 'district', 'hect', 'sDate','seasson', 'province', 'eDate', 'amount'];
}
