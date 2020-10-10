<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandType extends Model
{
    protected $table = 'land_type'; //land type table
    protected $primarykey = 'id';

    //relationships
    public function lands()
    {
        return $this->hasMany('App\Land', 'land_type_id', 'id');
    }

} //end of model class
