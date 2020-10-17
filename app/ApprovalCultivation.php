<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprovalCultivation extends Model
{
    protected $table = 'approval_cultivations';

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

    public function externalApproval()
    {
        return $this->hasOne('App\ExternalApproval', 'id', 'external_id');
    }
}
