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
        $vegetable = DB::table('crops')->where('type_id', "1")->distinct()->get();
        $fruits = DB::table('crops')->where('type_id', "2")->distinct()->get();
        $leafy = DB::table('crops')->where('type_id', "3")->distinct()->get();
        $roots = DB::table('crops')->where('type_id', "4")->distinct()->get();
        $paddy = DB::table('crops')->where('type_id', "5")->distinct()->get();
        $ofc = DB::table('crops')->where('type_id', "6")->distinct()->get();

        //crop category lists

        return view('cropInformation', array('vegetableList' => $vegetable, 'fruitList' => $fruits, 'leafyList' => $leafy, 'rootList' => $roots, 'paddyList' => $paddy, 'ofcList' => $ofc));

    }//end of function

} //end of public controller class
