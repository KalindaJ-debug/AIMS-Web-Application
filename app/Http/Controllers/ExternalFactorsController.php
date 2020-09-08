<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\externalFactors;
use App\external_factors;
use App\harvest;
//use App\External_factor;

class ExternalFactorsController extends Controller
{
    public function index()
    {
        // $login = Login::all();
        // return response()->json($login);
        $contacts = external_factors ::all();
        //$province = Province::all();
        return view('externalFac.index', compact('contacts')); 
        
    }
    public function create()
    {
        $harvest = harvest::all();
        $external_factors = external_factors::all();
        return view('externalFactors', array('harvest' => $harvest, 'external_factors' => $external_factors ));
    }
    public function store(Request $request)
    {
       /* $request->validate([
            'harvest_id' => 'required',
            'reason' => 'required',
            
        ],[
            'farmer_id.required'=>'Harvest ID is required!',
           
        ]);
        */
        //dd($request);
        $game = new external_factors;
        $game->harvest_id = request('harvest_id');
        $game->reason = request('reason');
        $game->save();
        
        return redirect()->action('ExternalFactorsController@index');
    }
}
