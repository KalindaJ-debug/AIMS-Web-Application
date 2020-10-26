<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    protected $table = 'varieties';

    public function crops()
    {
        return $this->belongsTo('App\Crop', 'crop_id', 'id');
    }

    public function approvalHarvest(){
        return $this->belongsTo('App\ApprovalHarvest');
    }
}
