<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Approval;
use App\Farmer;
use App\Province;
use App\District;
use App\Region;
use App\ApprovalData;
use App\CropCategory;
use App\Crop;
use App\Variety;
use App\ApprovalHarvest;
use App\ApprovalCultivation;
use App\cultivation;
use App\Land;

class ApprovalController extends Controller
{
    public function index()
    {
        $approvalCultivation = ApprovalCultivation::select('id', 'land_id', 'season', 'startDate', 'endDate')->get();

        $cultivatedData = array();
        foreach ($approvalCultivation as $cultivate) {
            $land = Land::select('province_id', 'district_id', 'region_id')->where('id', $cultivate->land_id)->first();

            $province = Province::select('name')->where('id', $land->province_id)->first();
            $district = District::select('name')->where('id', $land->district_id)->first();
            $region = Region::select('name')->where('id', $land->region_id)->first();
            
            $row = [$cultivate->id ,$cultivate->season];
            array_push($row, $province->name, $district->name, $region->name, $cultivate->startDate, $cultivate->endDate);
            array_push($cultivatedData, $row);
        }

        $approvalHarvest = ApprovalHarvest::select('id', 'land_id', 'season', 'endDate')->get();

        $harvestData = array();
        foreach ($approvalHarvest as $harvest) {
            $land = Land::select('province_id', 'district_id', 'region_id')->where('id', $harvest->land_id)->first();
            $cultivation = cultivation::select('startDate', 'endDate')->where('id', $harvest->cultivation_id)->first();

            $province = Province::select('name')->where('id', $land->province_id)->first();
            $district = District::select('name')->where('id', $land->district_id)->first();
            $region = Region::select('name')->where('id', $land->region_id)->first();
            
            $row = [$harvest->id ,$harvest->season];
            array_push($row, $province->name, $district->name, $region->name, $harvest->endDate, $cultivation->startDate, $cultivation->endDate);
            array_push($harvestData, $row);
        }

        dd($cultivatedData);
        return view('deviceAdmin', array('deviceUser' => $deviceUser, 'userAdd' => $user));
    }
}
