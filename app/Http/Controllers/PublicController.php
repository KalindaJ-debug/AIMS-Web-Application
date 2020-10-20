<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crop;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Support\Facades\App;

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
        $brinjal = DB::table('crops')->where('name', 'Brinjal')->distinct()->first();
        $brinjal_records = DB::table('cultivation')->where('crop_id', $brinjal->id )->get();
        $brinjal_total = 0.0;
        
        foreach($brinjal_records as $item){
            $brinjal_cultivated = $item->cultivatedLand;
            $brinjal_total = $brinjal_total + $brinjal_cultivated;
        }

        $brinjal_est_harvest = 0.0;
        foreach($brinjal_records as $item){
            $brinjal_harvest = $item->harvestedAmount;
            $brinjal_est_harvest = $brinjal_harvest + $brinjal_est_harvest;
        }
        $brinjal_harvest_rate = ($brinjal_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $brinjal_harvest_rate = number_format((double)$brinjal_harvest_rate, 2, '.', '');
        
        $brinjal_satisfaction_rate = $this->satisfactionRate($brinjal_harvest_rate);

        $brinjal_summary = array();
        array_push($brinjal_summary, $brinjal_total, $brinjal_harvest_rate, $brinjal_satisfaction_rate);
        
        //cabbage
        $cabbage = DB::table('crops')->where('name', 'Cabbage')->distinct()->first();
        $cabbage_records = DB::table('cultivation')->where('crop_id', $cabbage->id )->get();
        $cabbage_total = 0.0;
        
        foreach($cabbage_records as $item){
            $cabbage_cultivated = $item->cultivatedLand;
            $cabbage_total = $cabbage_total + $cabbage_cultivated;
        }

        $cabbage_est_harvest = 0.0;
        foreach($cabbage_records as $item){
            $cabbage_harvest = $item->harvestedAmount;
            $cabbage_est_harvest = $cabbage_harvest + $cabbage_est_harvest;
        }
        $cabbage_harvest_rate = ($cabbage_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $cabbage_harvest_rate = number_format((double)$cabbage_harvest_rate, 2, '.', '');
        
        $cabbage_satisfaction_rate = $this->satisfactionRate($cabbage_harvest_rate);

        $cabbage_summary = array();
        array_push($cabbage_summary, $cabbage_total, $cabbage_harvest_rate, $cabbage_satisfaction_rate);
        
        //capsicum
        $capsicum = DB::table('crops')->where('name', 'Capsicum')->distinct()->first();
        $capsicum_records = DB::table('cultivation')->where('crop_id', $capsicum->id )->get();
        $capsicum_total = 0.0;
        
        foreach($capsicum_records as $item){
            $capsicum_cultivated = $item->cultivatedLand;
            $capsicum_total = $capsicum_total + $capsicum_cultivated;
        }

        $capsicum_est_harvest = 0.0;
        foreach($capsicum_records as $item){
            $capsicum_harvest = $item->harvestedAmount;
            $capsicum_est_harvest = $capsicum_harvest + $capsicum_est_harvest;
        }
        $capsicum_harvest_rate = ($capsicum_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $capsicum_harvest_rate = number_format((double)$capsicum_harvest_rate, 2, '.', '');
        
        $capsicum_satisfaction_rate = $this->satisfactionRate($capsicum_harvest_rate);

        $capsicum_summary = array();
        array_push($capsicum_summary, $capsicum_total, $capsicum_harvest_rate, $capsicum_satisfaction_rate);
    
        //carrot
        $carrot = DB::table('crops')->where('name', 'Carrot')->distinct()->first();
        $carrot_records = DB::table('cultivation')->where('crop_id', $carrot->id )->get();
        $carrot_total = 0.0;
        
        foreach($carrot_records as $item){
            $carrot_cultivated = $item->cultivatedLand;
            $carrot_total = $carrot_total + $carrot_cultivated;
        }

        $carrot_est_harvest = 0.0;
        foreach($carrot_records as $item){
            $carrot_harvest = $item->harvestedAmount;
            $carrot_est_harvest = $carrot_harvest + $carrot_est_harvest;
        }
        $carrot_harvest_rate = ($carrot_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $carrot_harvest_rate = number_format((double)$carrot_harvest_rate, 2, '.', '');
        
        $carrot_satisfaction_rate = $this->satisfactionRate($carrot_harvest_rate);

        $carrot_summary = array();
        array_push($carrot_summary, $carrot_total, $carrot_harvest_rate, $carrot_satisfaction_rate);
        
        //cucumber
        $cucumber = DB::table('crops')->where('name', 'Cucumber')->distinct()->first();
        $cucumber_records = DB::table('cultivation')->where('crop_id', $cucumber->id )->get();
        $cucumber_total = 0.0;
        
        foreach($cucumber_records as $item){
            $cucumber_cultivated = $item->cultivatedLand;
            $cucumber_total = $cucumber_total + $cucumber_cultivated;
        }

        $cucumber_est_harvest = 0.0;
        foreach($cucumber_records as $item){
            $cucumber_harvest = $item->harvestedAmount;
            $cucumber_est_harvest = $cucumber_harvest + $cucumber_est_harvest;
        }
        $cucumber_harvest_rate = ($cucumber_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $cucumber_harvest_rate = number_format((double)$cucumber_harvest_rate, 2, '.', '');
        
        $cucumber_satisfaction_rate = $this->satisfactionRate($cucumber_harvest_rate);

        $cucumber_summary = array();
        array_push($cucumber_summary, $cucumber_total, $cucumber_harvest_rate, $cucumber_satisfaction_rate);
        
        //leeks
        $leeks = DB::table('crops')->where('name', 'Leeks')->distinct()->first();
        $leeks_records = DB::table('cultivation')->where('crop_id', $leeks->id )->get();
        $leeks_total = 0.0;
        
        foreach($leeks_records as $item){
            $leeks_cultivated = $item->cultivatedLand;
            $leeks_total = $leeks_total + $leeks_cultivated;
        }

        $leeks_est_harvest = 0.0;
        foreach($leeks_records as $item){
            $leeks_harvest = $item->harvestedAmount;
            $leeks_est_harvest = $leeks_harvest + $leeks_est_harvest;
        }
        $leeks_harvest_rate = ($leeks_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $leeks_harvest_rate = number_format((double)$leeks_harvest_rate, 2, '.', '');
        
        $leeks_satisfaction_rate = $this->satisfactionRate($leeks_harvest_rate);

        $leeks_summary = array();
        array_push($leeks_summary, $leeks_total, $leeks_harvest_rate, $leeks_satisfaction_rate);
    
        //long_beans
        $long_beans = DB::table('crops')->where('name', 'Long Beans')->distinct()->first();
        $long_beans_records = DB::table('cultivation')->where('crop_id', $long_beans->id )->get();
        $long_beans_total = 0.0;
        
        foreach($long_beans_records as $item){
            $long_beans_cultivated = $item->cultivatedLand;
            $long_beans_total = $long_beans_total + $long_beans_cultivated;
        }

        $long_beans_est_harvest = 0.0;
        foreach($long_beans_records as $item){
            $long_beans_harvest = $item->harvestedAmount;
            $long_beans_est_harvest = $long_beans_harvest + $long_beans_est_harvest;
        }
        $long_beans_harvest_rate = ($long_beans_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $long_beans_harvest_rate = number_format((double)$long_beans_harvest_rate, 2, '.', '');
        
        $long_beans_satisfaction_rate = $this->satisfactionRate($long_beans_harvest_rate);

        $long_beans_summary = array();
        array_push($long_beans_summary, $long_beans_total, $long_beans_harvest_rate, $long_beans_satisfaction_rate);
        
        //luffa
        $luffa = DB::table('crops')->where('name', 'Luffa')->distinct()->first();
        $luffa_records = DB::table('cultivation')->where('crop_id', $luffa->id )->get();
        $luffa_total = 0.0;
        
        foreach($luffa_records as $item){
            $luffa_cultivated = $item->cultivatedLand;
            $luffa_total = $luffa_total + $luffa_cultivated;
        }

        $luffa_est_harvest = 0.0;
        foreach($luffa_records as $item){
            $luffa_harvest = $item->harvestedAmount;
            $luffa_est_harvest = $luffa_harvest + $luffa_est_harvest;
        }
        $luffa_harvest_rate = ($luffa_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $luffa_harvest_rate = number_format((double)$luffa_harvest_rate, 2, '.', '');
        
        $luffa_satisfaction_rate = $this->satisfactionRate($luffa_harvest_rate);

        $luffa_summary = array();
        array_push($luffa_summary, $luffa_total, $luffa_harvest_rate, $luffa_satisfaction_rate);
        
        //okra
        $okra = DB::table('crops')->where('name', 'Okra')->distinct()->first();
        $okra_records = DB::table('cultivation')->where('crop_id', $okra->id )->get();
        $okra_total = 0.0;
        
        foreach($okra_records as $item){
            $okra_cultivated = $item->cultivatedLand;
            $okra_total = $okra_total + $okra_cultivated;
        }

        $okra_est_harvest = 0.0;
        foreach($okra_records as $item){
            $okra_harvest = $item->harvestedAmount;
            $okra_est_harvest = $okra_harvest + $okra_est_harvest;
        }
        $okra_harvest_rate = ($okra_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $okra_harvest_rate = number_format((double)$okra_harvest_rate, 2, '.', '');
        
        $okra_satisfaction_rate = $this->satisfactionRate($okra_harvest_rate);

        $okra_summary = array();
        array_push($okra_summary, $okra_total, $okra_harvest_rate, $okra_satisfaction_rate);
        
        //pumpkin
        $pumpkin = DB::table('crops')->where('name', 'Pumpkin')->distinct()->first();
        $pumpkin_records = DB::table('cultivation')->where('crop_id', $pumpkin->id )->get();
        $pumpkin_total = 0.0;
        
        foreach($pumpkin_records as $item){
            $pumpkin_cultivated = $item->cultivatedLand;
            $pumpkin_total = $pumpkin_total + $pumpkin_cultivated;
        }

        $pumpkin_est_harvest = 0.0;
        foreach($pumpkin_records as $item){
            $pumpkin_harvest = $item->harvestedAmount;
            $pumpkin_est_harvest = $pumpkin_harvest + $pumpkin_est_harvest;
        }
        $pumpkin_harvest_rate = ($pumpkin_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $pumpkin_harvest_rate = number_format((double)$pumpkin_harvest_rate, 2, '.', '');
        
        $pumpkin_satisfaction_rate = $this->satisfactionRate($pumpkin_harvest_rate);

        $pumpkin_summary = array();
        array_push($pumpkin_summary, $pumpkin_total, $pumpkin_harvest_rate, $pumpkin_satisfaction_rate);
        
        //radish
        $radish = DB::table('crops')->where('name', 'Radish')->distinct()->first();
        $radish_records = DB::table('cultivation')->where('crop_id', $radish->id )->get();
        $radish_total = 0.0;
        
        foreach($radish_records as $item){
            $radish_cultivated = $item->cultivatedLand;
            $radish_total = $radish_total + $radish_cultivated;
        }

        $radish_est_harvest = 0.0;
        foreach($radish_records as $item){
            $radish_harvest = $item->harvestedAmount;
            $radish_est_harvest = $radish_harvest + $radish_est_harvest;
        }
        $radish_harvest_rate = ($radish_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $radish_harvest_rate = number_format((double)$radish_harvest_rate, 2, '.', '');
        
        $radish_satisfaction_rate = $this->satisfactionRate($radish_harvest_rate);

        $radish_summary = array();
        array_push($radish_summary, $radish_total, $radish_harvest_rate, $radish_satisfaction_rate);
        
        //snakegourd 
        $snakegourd = DB::table('crops')->where('name', 'Snake Gourd')->distinct()->first();
        $snakegourd_records = DB::table('cultivation')->where('crop_id', $snakegourd->id )->get();
        $snakegourd_total = 0.0;
        
        foreach($snakegourd_records as $item){
            $snakegourd_cultivated = $item->cultivatedLand;
            $snakegourd_total = $snakegourd_total + $snakegourd_cultivated;
        }

        $snakegourd_est_harvest = 0.0;
        foreach($snakegourd_records as $item){
            $snakegourd_harvest = $item->harvestedAmount;
            $snakegourd_est_harvest = $snakegourd_harvest + $snakegourd_est_harvest;
        }
        $snakegourd_harvest_rate = ($snakegourd_est_harvest/33882.0) * 100; //according to 2002 estimation - change at will
        $snakegourd_harvest_rate = number_format((double)$snakegourd_harvest_rate, 2, '.', '');
        
        $snakegourd_satisfaction_rate = $this->satisfactionRate($snakegourd_harvest_rate);

        $snakegourd_summary = array();
        array_push($snakegourd_summary, $snakegourd_total, $snakegourd_harvest_rate, $snakegourd_satisfaction_rate);
        
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
            'bittergourd' => $bittergourd_summary,
            'brinjal' => $brinjal_summary,
            'cabbage' => $cabbage_summary,
            'capsicum' => $capsicum_summary,
            'carrot' => $carrot_summary,
            'cucumber' => $cucumber_summary,
            'leeks' => $leeks_summary,
            'long_beans' => $long_beans_summary,
            'luffa' => $luffa_summary,
            'okra' => $okra_summary,
            'pumpkin' => $pumpkin_summary,
            'radish' => $radish_summary,
            'snakegourd' => $snakegourd_summary
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

    //report generation method
    public function exportReport($crop, Request $request){
        
        //fetch crop record
        $crop_record = Crop::with('varieties')->where('name', $crop)->distinct()->first();
        $crop_cultivation = $request->input('cultivation');
        $crop_rate = $request->input('rate');
        $crop_comment = $request->input('comment');
        
        //html stream
        $htmlStream = '
        <div class="col-6">
        <div style="max-width:100%;background-color:#08260E;border:none;">
        <div class="row no-gutters">
          <div class="col-md-4">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center" style="padding:30px;color:white;">
              <h2 class="card-title" style="margin-left:20px;">Agriculture Information Management System | AIMS </h2>
              <p class="card-text" style="margin-left:400px;">Department of Agriculture</p>
            </div>
          </div>
        </div>
      </div>
      </div>

      <br>
      <h3 style="margin-left:250px;"> Main Crop Information </h3>
      <p style="margin-left:50px;">Crop Name: '.$crop_record->name.' </p>
      <p style="margin-left:50px;">Crop Varieties : ';
      
      foreach($crop_record->varieties as $item){
        $htmlStream .='
            <ul style="margin-left:150px;">
                <li>'.$item->name.'</li>
            </ul> 
        ';
      } //end of foreach

      $htmlStream .= ' </p>
      <hr>
        <br>
        <p> Summarized Data for '.$crop.' are stated below. </p>
        <br>
    <table width="100%" style="border-collapse: collapse; border: 0px;">
    
    <tr>
    <th style="padding:15px;text-align:left;background-color: #ffa;"> Cultivated Land Extent in Hectares (ha) : </th>
    <td style="padding:15px;text-align:left;background-color: #ffa;"> : '.$crop_cultivation.' ha </td>
    <td style="background-color: #ffa;"></td>
    <td style="background-color: #ffa;"></td>
    </tr>

    <tr>
    <th style="padding:15px;text-align:left;background-color: #ffa;"> Satisfaction Rate of the Estimated Harvest : </th>
    <td style="padding:15px;text-align:left;background-color: #ffa;"> : '.$crop_rate.' % </td>
    <td style="background-color: #ffa;"></td>
    <td style="background-color: #ffa;"></td>
    </tr>

    <tr>
    <th style="padding:15px;text-align:left;background-color: #ffa;"> Recommendation for Crop Cultivation : </th>
    <td style="padding:15px;text-align:left;background-color: #ffa;"> : '.$crop_comment.' </td>
    <td style="background-color: #ffa;"></td>
    <td style="background-color: #ffa;"></td>
    </tr>

        ';

        $htmlStream .= '</table>
        <br>
        
        ';

        //streeam pdf
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($htmlStream);
        return $pdf->stream();

    }//end of method

} //end of public controller class
