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

        //tomato
        $tomato = DB::table('crops')->where('name', 'Tomato')->distinct()->first();
        $tomato_records = DB::table('cultivation')->where('crop_id', $tomato->id )->get();
        $tomato_total = 0.0;
        
        foreach($tomato_records as $item){
            $tomato_cultivated = $item->cultivatedLand;
            $tomato_total = $tomato_total + $tomato_cultivated;
        }

        $tomato_est_harvest = 0.0;
        foreach($tomato_records as $item){
            $tomato_harvest = $item->harvestedAmount;
            $tomato_est_harvest = $tomato_harvest + $tomato_est_harvest;
        }
        $tomato_harvest_rate = ($tomato_est_harvest/84460.0) * 100; //according to 2002 estimation
        $tomato_harvest_rate = number_format((double)$tomato_harvest_rate, 2, '.', '');
        
        $tomato_satisfaction_rate = $this->satisfactionRate($tomato_harvest_rate);

        // $tomato_summary = array('cultivation' => $tomato_total, 'rate' => $tomato_harvest_rate, 'satisfaction' => $tomato_satisfaction_rate);
        $tomato_summary = array();
        array_push($tomato_summary, $tomato_total, $tomato_harvest_rate, $tomato_satisfaction_rate);
        // dd($tomato_summary);
        //tomato ends

        //return values
        return view('publicMainCrops', array('tomato' => $tomato_summary));

    }//end of function

    public function satisfactionRate($rate){
        if($rate <= 0.0){ //100
            return "Excellent Demand";
        }
        else if($rate > 0.0 && $rate <= 20.0){
            return "Best Price"; //80
        }
        else if($rate > 20.0 && $rate <= 50.0){
            return "Good Price"; //60
        }
        else if($rate > 50.0 && $rate <= 70.0){
            return "General Price"; //40
        }
        else if($rate > 70.0 && $rate <= 90.0){
            return "Poor Price"; //20
        }
        else{
            return "Price Loss"; //10
        }
    }//end of function

} //end of public controller class
