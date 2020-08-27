<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table = 'farmers';

    protected $fillable = ['firstName', 'lastName', 'otherName', 'telephoneNo', 'nic', 'nicImage', 'password'];

    public function lands()
    {
        return $this->hasMany('App\Land');
    }

    public function device()
    {
        return $this->hasOne('App\Device', 'id');
    }
}
