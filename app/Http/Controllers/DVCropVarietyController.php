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

        $district_name_display = District::where('id', $districtname)->first(); 
                   
        //Cultivation Chart Query
        $cultivation = DB::select('select v.name as name, sum(c.cultivatedLand) as sum
                                   from cultivation c,varieties v 
                                   where c.district_id = ? AND v.id = c.variety_id
                                   group by c.variety_id', [$districtname]);
        
          
        // Harvest extent Chart Query
        $harvest = DB::select('select v.name as name, sum(c.cultivatedLand) as sum
                                   from harvests c,varieties v 
                                   where c.district_id = ? AND v.id = c.variety_id
                                   group by c.variety_id', [$districtname]);        


        //Return to view
        return view('crop_variety_dv', ['districtname' => $districtname, 
                 'cultivations' => $cultivation,  'harvests' => $harvest, 'district_name_display' => $district_name_display]);
    }

}

