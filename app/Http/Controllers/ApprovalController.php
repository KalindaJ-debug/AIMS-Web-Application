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
use App\ExternalApproval;

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
            $harvest->category_id = $approvalHarvest->variety->crop->category->id;
            $harvest->crop_id = $approvalHarvest->variety->crop->id;
            $harvest->variety_id = $approvalHarvest->variety_id;
            $harvest->province_id = $approvalHarvest->land->provinces->id;
            $harvest->district_id = $approvalHarvest->land->districts->id;
            $harvest->region_id = $approvalHarvest->land->regions->id;
            $harvest->season = $approvalHarvest->season;
            $harvest->endDate = $approvalHarvest->endDate;
            $harvest->harvestedAmount = $approvalHarvest->harvestedAmount;
            $harvest->cultivatedLand = $approvalHarvest->cultivatedLand;

            $harvest->save();

        } else {
            $approvalHarvest->status = 2;

            $external = new ExternalApproval;
            $external->approval_harvest_id = $request->input('id');
            
            if ($request->input('otherCheck') == "on") {
                
                $external->other = $request->input('other');
            
            } else {
                
                if ($request->input('redundant') == "on") {
                    $external->redundant = true;
                } 
                if ($request->input('accuracy') == "on") {
                    $external->inaccurate = true;
                }
                if ($request->input('decimal') == "on") {
                    $external->decimal = true;
                }
                if ($request->input('landError') == "on") {
                    $external->land = true;
                }

            }
            
            $external->save();
        }
        $approvalHarvest->save();
        return redirect()->action('ApprovalController@index');
    }

    public function updateCultivation(Request $request) {
        //dd($request->request);
       
        $approvalCultivation = ApprovalCultivation::where('id', $request->input('id'))->first();
        if ($request->input('status') == "approved") {
            $approvalCultivation->status = 1;

            $cultivation = new cultivation;

            $cultivation->land_id = $approvalCultivation->land_id;
            $cultivation->category_id = $approvalCultivation->variety->crop->category->id;
            $cultivation->crop_id = $approvalCultivation->variety->crop->id;
            $cultivation->variety_id = $approvalCultivation->variety_id;
            $cultivation->province_id = $approvalCultivation->land->provinces->id;
            $cultivation->district_id = $approvalCultivation->land->districts->id;
            $cultivation->region_id = $approvalHarvest->land->regions->id;
            $cultivation->season = $approvalCultivation->season;
            $cultivation->startDate = $approvalCultivation->startDate;
            $cultivation->endDate = $approvalCultivation->endDate;
            $cultivation->harvestedAmount = $approvalCultivation->harvestedAmount;
            $cultivation->cultivatedLand = $approvalCultivation->cultivatedLand;

            $cultivation->save();

        } else {
            $approvalCultivation->status = 2;

            $external = new ExternalApproval;
            $external->approval_cultivation_id = $request->input('id');
            
            if ($request->input('otherCheck') == "on") {
                
                $external->other = $request->input('other');
            
            } else {
                
                if ($request->input('redundant') == "on") {
                    $external->redundant = true;
                } 
                if ($request->input('accuracy') == "on") {
                    $external->inaccurate = true;
                }
                if ($request->input('decimal') == "on") {
                    $external->decimal = true;
                }
                if ($request->input('landError') == "on") {
                    $external->land = true;
                }

            }
            
            $external->save();
        }

        $approvalCultivation->save();
        return redirect()->action('ApprovalController@index');
    }
}
