<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Variety;
use App\CropCategory;
use App\Crop;
use App\cultivation;
use App\harvests;
use App\Charts\CropVarietyChart;
use App\District;

class DVCropVarietyController extends Controller
{

    //Get name of variety corresponding to the variety ID
    public function getVarietyName($vID){

        $name = variety::pluck('name')->where('id', $vID)->get();
        return $name;

    }


    public function index(){

        //District list to be passed into dropdown
        $districtlist = District::all();
        
        //Return to view
        return view('crop_variety_chart', ['districtlist' => $districtlist]);
    }


    public function generateChart(Request $request){

        //District list to be passed into dropdown
        $districtlist = District::all();

        //Input from district dropdown
        $districtname = $request->input('districtname');
    
        // Cultivation extent Chart        
        $cultivation = cultivation::where('district_id',$districtname)
                        ->groupBy('variety_id')
                        ->selectRaw('sum(cultivatedLand) as sum, variety_id')
                        ->pluck('variety_id','sum');
                        
                        
        //$variety_id = cultivation::pluck('variety_id');
        //$variety_name = variety::pluck('name')->where('id', $variety_id);

        $cultivationChart = new CropVarietyChart;

        $cultivationChart->title('Cultivation extent(Ha.) vs Crop variety');
        $cultivationChart->labels($cultivation->values());
        $cultivationChart->dataset('Cultivation extent', 'bar', $cultivation->keys())
                            ->backgroundColor('#AADAAA');


        // Harvest extent Chart
        $harvest = harvests::where('district_id',$districtname)
                        ->groupBy('variety_id')
                        ->selectRaw('sum(cultivatedLand) as sum, variety_id')
                        ->pluck('variety_id','sum');

        $harvestChart = new CropVarietyChart;

        $harvestChart->title('Harvest extent(Ha.) vs Crop variety');
        $harvestChart->labels($harvest->values());
        $harvestChart->dataset('Cultivation extent', 'bar', $harvest->keys())
                            ->backgroundColor('#CADAAA');
        


        $topic = District::where('id', $districtname)->select('name');

        //Return to view
        return view('crop_variety_dv', ['districtname' => $districtname, 
                'cultivation' => $cultivation, 'cultivationChart' => $cultivationChart, 'harvestChart' => $harvestChart,
                    'topic'=> $topic]);
    }

    }

