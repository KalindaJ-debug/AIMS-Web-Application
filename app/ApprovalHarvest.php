<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprovalHarvest extends Model
{
    protected $table = 'approval_harvests';

    public function cultivation()
    {
        return $this->hasOne('App\cultivation', 'id', 'cultivation_id');
    }

    public function land()
    {
        return $this->hasOne('App\Land', 'id', 'land_id');
    }

    public function category()
    {
        return $this->hasOne('App\CropCategory', 'id');
    }

    public function crop()
    {
        return $this->hasOne('App\Crop', 'id');
    }

    public function variety()
    {
        return $this->hasOne('App\Variety', 'id');
    }
}
