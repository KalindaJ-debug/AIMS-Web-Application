<?php

namespace App\Http\Controllers\Mobile;

use App\ApprovalCultivation;
use App\Crop;
use App\CropCategory;
use App\cultivation;
use App\Farmer;
use App\Harvest;
use App\Http\Controllers\Controller;
use App\Land;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;
use App\Variety;
use Illuminate\Support\Facades\Hash;
use App\ExternalApproval;

class UserController extends Controller
{
    public function getAllRegisteredUsers(Request $request){


        $user = User::where('username', '=', $request->input('username'))->first();
        if (!$user) {
            return response()->json(['success'=> 0, 'message' => 'Login Fail, please check username']);
        }
        if (!Hash::check($request->input('password'), $user->password)) {
            return response()->json(['success'=> 0, 'message' => 'Login Fail, pls check password']);
        }
            return response()->json(['success'=> 1,'message'=>'success']);
    }

    public function getAllFarmers(Request $request){

        $farmers = Farmer::where('nic', '=', $request->input('username'))->first();
        if (!$farmers) {
            return response()->json(['success'=> 0, 'message' => 'Login Fail, please check username']);
        }
        return response()->json(['success'=> 1,'message'=>'success','id' => $farmers->id]);
    }

    public function getAllLand(Request $request){
        $land = Land::where('farmer_id', '=', $request->input('farmer_id'))->get();

        if (!$land) {
            return response()->json(['success'=> 0, 'message' => 'Login Fail, please check username']);
        }

        $land = Land::all();        
        return response()->json(['success'=> 1,'message'=>'success','land' => $land->all()]);

    }

    public function addCultivationData(Request $request){
 
        $season = "Maha";
        $endDate = "2020-11-08";
        $variety = Variety::where('id', '=', $request->input('variety'))->first();
        $land = Land::where('id', '=', $request->input('lid'))->first();


        $approval = new ApprovalCultivation();

            
            $approval->land_id = $request->input('lid');
            $approval->variety_id = $request->input('variety');;
            $approval->season = $season;
            $approval->endDate = $endDate;
            $approval->harvestedAmount = $request->input('amount');
            $approval->cultivatedLand = $request->input('extent');
            $approval->status = 0;

            $approval->save();



            return response()->json(['success'=> 1,'message'=>'successfully added all data','approval' => $approval]);
    }

    public function getAllApproval(){
        $approvals = ApprovalCultivation::where('status', '=', 0)
            ->LeftJoin('lands', 'lands.id', '=', 'approval_cultivations.land_id')
            ->LeftJoin('farmers', 'farmers.id', '=', 'lands.farmer_id' )
            ->select('farmers.firstName','approval_cultivations.season','approval_cultivations.variety_id','approval_cultivations.id','lands.addressNo','lands.streetName')
            ->get();

        return response()->json(['success'=> 1,'message'=>'success','approval' => $approvals]);

    }   

    public function getApproval(Request $request){

        $approval = ApprovalCultivation::where('approval_cultivations.id', '=', $request->input('id'))
        ->LeftJoin('lands', 'lands.id', '=', 'approval_cultivations.land_id')
        ->LeftJoin('farmers', 'farmers.id', '=', 'lands.farmer_id' )
        ->LeftJoin('varieties', 'varieties.id', '=', 'approval_cultivations.variety_id' )
        ->select('farmers.firstName','varieties.name','approval_cultivations.id','lands.addressNo','lands.streetName','approval_cultivations.cultivatedLand')
        ->get();

        return response()->json(['success'=> 1,'message'=>'success','approval' => $approval]);

    }

    public function ApproveData(Request $request){
        $approvalCultivation = ApprovalCultivation::where('id', $request->input('id'))->first();
            $approvalCultivation->status = 1;

            $cropArray = Variety::where('id', '=', $approvalCultivation->variety_id)
                ->select('crop_id')
                ->first();

            $crop = $cropArray['crop_id'];

            $categoryArray = Crop::where('id', '=', $crop)
                ->select('type_id')
                ->first();
            $category = $categoryArray['type_id'];

            $cultivation = new cultivation;

            $cultivation->land_id = $approvalCultivation->land_id;
            $cultivation->category_id = $category;
            $cultivation->crop_id = $crop;
            $cultivation->variety_id = $approvalCultivation->variety_id;
            $cultivation->province_id = $approvalCultivation->land->provinces->id;
            $cultivation->district_id = $approvalCultivation->land->districts->id;
            $cultivation->region_id = $approvalCultivation->land->regions->id;
            $cultivation->season = $approvalCultivation->season;
            $cultivation->startDate = $approvalCultivation->startDate;
            $cultivation->endDate = $approvalCultivation->endDate;
            $cultivation->harvestedAmount = $approvalCultivation->harvestedAmount;
            $cultivation->cultivatedLand = $approvalCultivation->cultivatedLand;

            $cultivation->save();

        $approvalCultivation->save();

            return response()->json(['success'=> 1,'message'=>'successfully added all data','cultivation' => $cultivation]);

    }
}
