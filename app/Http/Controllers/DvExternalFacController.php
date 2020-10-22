<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CropCategory;

class DvExternalFacController extends Controller
{
    public function index(){
    $cropcategory = CropCategory::all();
        
    return view('dvexternalfac.index')->with('cropcategory', $cropcategory);
    }
}
