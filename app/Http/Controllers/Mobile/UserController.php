<?php

namespace App\Http\Controllers\Mobile;

use App\ApprovalCultivation;
use App\Farmer;
use App\Http\Controllers\Controller;
use App\Land;
use App\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;
use App\Variety;
use Illuminate\Support\Facades\Hash;

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
        $approvals = ApprovalCultivation::where('status', '=', 0)->get();

        return response()->json(['success'=> 1,'message'=>'success','approval' => $approvals]);

    }   

    public function getApproval(Request $request){

        $approval = ApprovalCultivation::where('id', '=', $request->input('id'))->get();

        // $address = "".$approval->land->addressNo. " " .$approval->land->streetName. " ".$approval->land->laneName;

        // $name = $approval->Land->farmer->firstName;

        // $variety = $approval->variety->name;

        return response()->json(['success'=> 1,'message'=>'success','approval' => $approval]);//, 'name' => $name, 'variety' => $variety]);

    }
}
