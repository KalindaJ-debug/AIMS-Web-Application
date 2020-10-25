<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\harvestDetails;
use App\harvests;
use App\cultivation;
use App\farmer;
use App\Province;
use App\CropCategory;
use App\crop;
use App\variety;
use App\district;
use App\region;
use App\land;
use App\external_factors;

class HarvestController extends Controller
{
    public function index()
    {
        // $login = Login::all();
        // return response()->json($login);
        $contacts = harvests ::leftJoin("external_factors", "external_factors.id", "harvests.external_id")->select("harvests.*", "external_factors.reason")->get();
        //$province = Province::all();
        //dd($contacts);
        return view('harvest.index', compact('contacts')); 
        
    }

    public function create($id)
    {
        $province = Province::all();
        $CropCategory = CropCategory::all();
        $crop = crop::all();
        $variety = variety::all();
        $district = district::all();
        $region = region::all();
        $farmer = farmer::all();
        $cultivation = cultivation::where("id", $id)->first();
        $land = land::where("id", $cultivation->land_id)->first();
        $external_factors = external_factors::all();
        return view('harvestDetails', array('province' => $province, 'CropCategory' => $CropCategory, 'crop' => $crop, 'variety' => $variety, 'district' => $district, 'region' => $region, 'farmer' => $farmer, 'cultivation' => $cultivation, 'land' => $land, 'external_factors' => $external_factors));
    }

    public function store(Request $request)
    {
       /* $request->validate([
            'farmer_id' => 'required',
            'category_id' => 'required',
            'crop_id' => 'required',
            'variety_id' => 'required',
            'region_id' => 'required',
            'district_id' => 'required',
            'cultivatedLand' => 'required',
            'startDate' => 'required',
            'season' => 'required',
            'province_id' => 'required',
            'harvestedAmount' => 'required',
            'endDate' => 'required',
        ],[
            'farmer_id.required'=>'farmer ID is required!',
            'harvestedAmount.required'=>'harvested amount must be an interger value in Kg!',
            'cultivatedLand.required'=>'cultivated amount must be an interger value in Ha!',

        ]);
        */
        //dd($request);
        $game = new harvests;
        $game->cultivation_id = request('cultivation_id');
        $game->land_id = request('land_id');
        $game->category_id = request('category_id');
        $game->crop_id = request('crop_id');
        $game->variety_id = request('variety_id');
        $game->region_id = request('region_id');
        $game->district_id = request('district_id');
        $game->cultivatedLand = request('cultivatedLand');
        //$game->startDate = request('startDate');
        $game->season = request('season');
        $game->province_id = request('province_id');
        $game->harvestedAmount = request('harvestedAmount');
        $game->endDate = request('endDate');
        $game->external_id = request('reason');
        $game->save();
        
       /* $a = cultivation::whereRaw('cultivation.land_id='.request('land_id').' and cultivation.harvestedAmount > ' .request('harvestedAmount'))
        ->get();
        if(!empty($a->all()))
        {
            return redirect('/Entry-external-data');
            
        }else 
        */   
            return redirect('/harvest-data');
            
       
        // return redirect()->action('HarvestController@index');
        
    }
    
}
