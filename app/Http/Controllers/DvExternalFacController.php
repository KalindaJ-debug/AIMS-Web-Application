<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CropCategory;
use App\cultivation;
use Illuminate\Support\Facades\DB;

class DvExternalFacController extends Controller
{
    public function index(){
    $cropcategory = CropCategory::all();
        
    return view('dvexternalfac.index')->with('cropcategory', $cropcategory);
    }

   /* public function loadPage()
    {
        $external_fac = external_factors::all();
        //$district = DB::table('districts')->get();
        $cultivation = cultivation::all();
            //->select('sum(cultivatedLand) as sum, external_factors.name')
            ->groupBy('external_factors.name')
            ->get();

        //dd($cultivation);
        $external_fac = array();
        $facAmount = array();
        foreach ($cultivation as $external_factors) {
            $external_fac[] = $external_factors->name;
            $facAmount[] = $external_factors->sum;
        }
        //dd($cropCategory);
        return view('dvexternalfac.index', array('external_fac' => $external_fac, 'facAmount'=> $facAmount ));
    }
    */

}
