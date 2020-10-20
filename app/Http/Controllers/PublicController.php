<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crop;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    //
    public function allMainCrops(){

        //fetch lists
        $vegetable = Crop::with('varieties')->where('type_id', "1")->distinct()->get();
        $fruits = Crop::with('varieties')->where('type_id', "2")->distinct()->get();
        $leafy = Crop::with('varieties')->where('type_id', "3")->distinct()->get();
        $roots = Crop::with('varieties')->where('type_id', "4")->distinct()->get();
        $paddy = Crop::with('varieties')->where('type_id', "5")->distinct()->get();
        $ofc = Crop::with('varieties')->where('type_id', "6")->distinct()->get();

        // dd($vegetable);
        //crop category lists

        return view('cropInformation', array('vegetableList' => $vegetable, 'fruitList' => $fruits, 'leafyList' => $leafy, 'rootList' => $roots, 'paddyList' => $paddy, 'ofcList' => $ofc));

    }//end of function

    public function mainCrops(){

        
        return view('publicMainCrops');

    }//end of function

} //end of public controller class
