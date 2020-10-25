<?php

namespace App\Http\Controllers\Mobile;

use App\Farmer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\User;

class UserController extends Controller
{
    public function getAllRegisteredUsers(){
        $users = User::all();
        return response()->json($users);
    }

    public function getAllFarmers(){
        $farmers = Farmer::all();
        return response()->json($farmers);
    }
}
