<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variety;
use App\CropCategory;
use App\Crop;

class DVCropVarietyController extends Controller
{
    public function index(){

        //Get varieties from model

        //$cropvarieties = Crop::with('varieties')->get();
        $cropvariety = variety::all();

        return view('crop_variety_dv')->with('cropvariety', $cropvariety);
    }

}
