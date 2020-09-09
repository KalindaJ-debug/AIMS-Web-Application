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

class HarvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cultivation = cultivation::with('farmer')find($id);
        return view('harvest.harvest',compact('cultivation'));
    }

    /**
     * Get a validator for an incoming request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // $login = Login::all();
        // return response()->json($login);
        $contacts = harvests ::all();
        //$province = Province::all();
        return view('harvest.index', compact('contacts')); 
        
    }

    public function create()
    {
        $province = Province::all();
        $CropCategory = CropCategory::all();
        $crop = crop::all();
        $variety = variety::all();
        $district = district::all();
        $region = region::all();
        $farmer = farmer::all();
        return view('harvestDetails', array('province' => $province, 'CropCategory' => $CropCategory, 'crop' => $crop, 'variety' => $variety, 'district' => $district, 'region' => $region, 'farmer' => $farmer  ));
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
        $game->farmer_id = request('farmer_id');
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
        $game->save();
        
        return redirect()->action('HarvestController@index');

    }
    
}
