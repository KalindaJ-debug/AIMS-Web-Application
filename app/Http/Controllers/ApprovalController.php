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
        // dd($approvalHarvest->cultivation);
        return view('Approval.approvalHarvestDescription', array('harvest' => $approvalHarvest));
    }

    public function store(Request $request) {

    }
}
