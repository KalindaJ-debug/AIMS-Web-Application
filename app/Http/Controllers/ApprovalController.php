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
use App\Harvest;

class ApprovalController extends Controller
{
    public function index()
    {
        $approvalCultivation = ApprovalCultivation::select('id', 'land_id', 'season', 'startDate', 'endDate', 'status')->get();

        $cultivatedData = array();
        foreach ($approvalCultivation as $cultivate) {
            $row = [
                $cultivate->id, 
                $cultivate->land->farmer->firstName, 
                $cultivate->land->farmer->lastName, 
                $cultivate->season
            ];
            
            array_push(
                $row, 
                $cultivate->land->provinces->name, 
                $cultivate->land->districts->name, 
                $cultivate->land->regions->name, 
                $cultivate->startDate, 
                $cultivate->endDate, 
                $cultivate->status
            );
            
            array_push($cultivatedData, $row);
        }

        $approvalHarvest = ApprovalHarvest::select('id', 'land_id', 'cultivation_id', 'season', 'endDate', 'status')->get();
        //dd($approvalHarvest[0]->approvalHarvest);

        $harvestData = array();
        foreach ($approvalHarvest as $harvest) {
            //dd($harvest->crop);
            $row = [
                $harvest->id, 
                $harvest->land->farmer->firstName, 
                $harvest->land->farmer->lastName, 
                $harvest->season
            ];
            
            array_push(
                $row, 
                $harvest->land->provinces->name, 
                $harvest->land->districts->name, 
                $harvest->land->regions->name, 
                $harvest->endDate, 
                $harvest->cultivation->startDate, 
                $harvest->cultivation->endDate, 
                $harvest->status);
            
            array_push($harvestData, $row);
        }

        //dd($cultivatedData);
        return view('Approval.approval', array('cultivation' => $cultivatedData, 'harvest' => $harvestData));
    }


    public function harvestDescription($id) {
        $approvalHarvest = ApprovalHarvest::where('id', $id)->first();
        return view('Approval.approvalHarvestDescription', array('harvest' => $approvalHarvest));
    }

    public function cultivationDescription($id) {
        $approvalCultivation = ApprovalCultivation::where('id', $id)->first();
        return view('Approval.approvalCultivationDescription', array('cultivation' => $approvalCultivation));
    }

    public function updateHarvest(Request $request) {
        $approvalHarvest = ApprovalHarvest::where('id', $request->input('id'))->first();
        if ($request->input('status') == "approved") {
            $approvalHarvest->status = 1;
            
            $harvest = new Harvest;

            $harvest->cultivation_id = $approvalHarvest->cultivation_id;
            $harvest->land_id = $approvalHarvest->land_id;
            $harvest->category_id = $approvalHarvest->category_id;
            $harvest->crop_id = $approvalHarvest->crop_id;
            $harvest->variety_id = $approvalHarvest->variety_id;
            $harvest->province_id = $approvalHarvest->province_id;
            $harvest->district_id = $approvalHarvest->district_id;
            $harvest->region_id = $approvalHarvest->region_id;
            $harvest->season = $approvalHarvest->season;
            $harvest->endDate = $approvalHarvest->endDate;
            $harvest->harvestedAmount = $approvalHarvest->harvestedAmount;
            $harvest->cultivatedLand = $approvalHarvest->cultivatedLand;

            $harvest->save();

        } else {
            $approvalHarvest->status = 2;
        }
        $approvalHarvest->save();
        return redirect()->action('ApprovalController@index');
    }

    public function updateCultivation(Request $request) {
        $approvalCultivation = ApprovalCultivation::where('id', $request->input('id'))->first();
        if ($request->input('status') == "approved") {
            $approvalCultivation->status = 1;

            $cultivation = new cultivation;

            $cultivation->land_id = $approvalCultivation->land_id;
            $cultivation->category_id = $approvalCultivation->category_id;
            $cultivation->crop_id = $approvalCultivation->crop_id;
            $cultivation->variety_id = $approvalCultivation->variety_id;
            $cultivation->province_id = $approvalCultivation->province_id;
            $cultivation->district_id = $approvalCultivation->district_id;
            $cultivation->region_id = $approvalCultivation->region_id;
            $cultivation->season = $approvalCultivation->season;
            $cultivation->startDate = $approvalCultivation->startDate;
            $cultivation->endDate = $approvalCultivation->endDate;
            $cultivation->harvestedAmount = $approvalCultivation->harvestedAmount;
            $cultivation->cultivatedLand = $approvalCultivation->cultivatedLand;

            $cultivation->save();

        } else {
            $approvalCultivation->status = 2;
        }
        $approvalCultivation->save();
        return redirect()->action('ApprovalController@index');
    }
}
