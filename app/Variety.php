<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    protected $table = 'varieties';

    public function crop()
    {
        return $this->belongsTo('App\Crop');
    }

    public function approvalHarvest(){
        return $this->belongsTo('App\ApprovalHarvest');
    }
}
