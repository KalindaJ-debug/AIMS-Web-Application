<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalApproval extends Model
{
    protected $table = 'external_approvals';

    public function approvalCultivation()
    {
        return $this->belongsTo('App\ApprovalCultivation');
    }

    public function approvalHarvest()
    {
        return $this->belongsTo('App\ApprovalHarvest');
    }
}
