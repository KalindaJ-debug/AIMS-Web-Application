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
}
