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

        //beans
        $beans = DB::table('crops')->where('name', 'Beans')->distinct()->first();
        $beans_records = DB::table('cultivation')->where('crop_id', $beans->id )->get();
        $beans_total = 0.0;
        
        foreach($beans_records as $item){
            $beans_cultivated = $item->cultivatedLand;
            $beans_total = $beans_total + $beans_cultivated;
        }

        $beans_est_harvest = 0.0;
        foreach($beans_records as $item){
            $beans_harvest = $item->harvestedAmount;
            $beans_est_harvest = $beans_harvest + $beans_est_harvest;
        }
        $beans_harvest_rate = ($beans_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $beans_harvest_rate = number_format((double)$beans_harvest_rate, 2, '.', '');
        
        $beans_satisfaction_rate = $this->satisfactionRate($beans_harvest_rate);

        $beans_summary = array();
        array_push($beans_summary, $beans_total, $beans_harvest_rate, $beans_satisfaction_rate);
        
        //beetroot
        $beetroot = DB::table('crops')->where('name', 'Beetroot')->distinct()->first();
        $beetroot_records = DB::table('cultivation')->where('crop_id', $beetroot->id )->get();
        $beetroot_total = 0.0;
        
        foreach($beetroot_records as $item){
            $beetroot_cultivated = $item->cultivatedLand;
            $beetroot_total = $beetroot_total + $beetroot_cultivated;
        }

        $beetroot_est_harvest = 0.0;
        foreach($beetroot_records as $item){
            $beetroot_harvest = $item->harvestedAmount;
            $beetroot_est_harvest = $beetroot_harvest + $beetroot_est_harvest;
        }
        $beetroot_harvest_rate = ($beetroot_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $beetroot_harvest_rate = number_format((double)$beetroot_harvest_rate, 2, '.', '');
        
        $beetroot_satisfaction_rate = $this->satisfactionRate($beetroot_harvest_rate);

        $beetroot_summary = array();
        array_push($beetroot_summary, $beetroot_total, $beetroot_harvest_rate, $beetroot_satisfaction_rate);
        
        //bittergourd
        $bittergourd = DB::table('crops')->where('name', 'Bitter Gourd')->distinct()->first();
        $bittergourd_records = DB::table('cultivation')->where('crop_id', $bittergourd->id )->get();
        $bittergourd_total = 0.0;
        
        foreach($bittergourd_records as $item){
            $bittergourd_cultivated = $item->cultivatedLand;
            $bittergourd_total = $bittergourd_total + $bittergourd_cultivated;
        }

        $bittergourd_est_harvest = 0.0;
        foreach($bittergourd_records as $item){
            $bittergourd_harvest = $item->harvestedAmount;
            $bittergourd_est_harvest = $bittergourd_harvest + $bittergourd_est_harvest;
        }
        $bittergourd_harvest_rate = ($bittergourd_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $bittergourd_harvest_rate = number_format((double)$bittergourd_harvest_rate, 2, '.', '');
        
        $bittergourd_satisfaction_rate = $this->satisfactionRate($bittergourd_harvest_rate);

        $bittergourd_summary = array();
        array_push($bittergourd_summary, $bittergourd_total, $bittergourd_harvest_rate, $bittergourd_satisfaction_rate);
        
        //brinjal

        //cabbage
        //capsicum
        //carrot
        //cucumber
        //leeks
        //long beans
        //luffa
        //okra
        //pumpkin
        //radish
        //snakegourd 

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

        $tomato_summary = array();
        array_push($tomato_summary, $tomato_total, $tomato_harvest_rate, $tomato_satisfaction_rate);
        //tomato ends

        //return values
        return view('publicMainCrops', array(
            'tomato' => $tomato_summary, 
            'beans' => $beans_summary, 
            'beetroot' => $beetroot_summary,
            'bittergourd' => $bittergourd_summary
        ));

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
