<?php

namespace App\Http\Controllers\Mobile;

use App\Farmer;
use App\Http\Controllers\Controller;
use App\Land;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;
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
    }
}
