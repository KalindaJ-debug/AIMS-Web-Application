<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use App\cropDetails;
use App\dataEntry;
use App\cultivation;
use App\farmer;
use App\Province;
use App\CropCategory;
use App\crop;
use App\variety;
use App\district;
use App\region;
use App\land;
use DB;

class DataController extends Controller
{
   
    public function index()
    {
        // $login = Login::all();
        // return response()->json($login);
        $contacts = cultivation ::all();
        return view('crop.index', compact('contacts'));
        
    }
    public function list()
    {
        $contacts = cultivation::all();
        $land = land::all();
        $farmer = farmer::all();
        return view('crop.list', compact('contacts'));
    }

    public function farmerid()
    {
        $land = land::where('farmer_id', request('farmer_id'))->first();
        return $land;
    }

    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('crop_categories', 'crops', 'varieties')
                ->where($select, $value)
                ->groupBy($dependent)
                ->get();
        $output = '<option value="">Select '.ucfirst($dependent). '</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent. '</option>';
        }
        echo $output;
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Province::all();
        $CropCategory = CropCategory::all();
        $crop = crop::all();
        $variety = variety::all();
        $district = district::all();
        $region = region::all();
        $farmer = farmer::all();
        $land = land::all();
        return view('cropDetails', array('province' => $province, 'CropCategory' => $CropCategory, 'crop' => $crop, 'variety' => $variety, 'district' => $district, 'region' => $region, 'farmer' => $farmer, 'land' => $land));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
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

        $game = new cultivation;
        $game->land_id = request('land_id');
        $game->category_id = request('category_id');
        $game->crop_id = request('crop_id');
        $game->variety_id = request('variety_id');
        $game->region_id = request('region_id');
        $game->district_id = request('district_id');
        $game->cultivatedLand = request('cultivatedLand');
        $game->startDate = request('startDate');
        $game->season = request('season');
        $game->province_id = request('province_id');
        $game->harvestedAmount = request('harvestedAmount');
        $game->endDate = request('endDate');
        $game->save();
        
        return redirect()->action('DataController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = cultivation::find($id);
        return view('crop.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = cultivation::find($id);
        $contact->delete();

        return redirect('/crop-data')->with('success', 'Contact deleted!');
    }
}
