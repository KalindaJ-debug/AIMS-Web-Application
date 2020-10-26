<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CropCategory;
use App\District;
use App\harvests;
use App\cultivation;
use Illuminate\Support\Facades\DB;

class DVCropCategoryController extends Controller
{
    public function loadPage()
    {
        $crop_cat = CropCategory::all();
        $district = DB::table('districts')->get();
        $cultivation = cultivation::Where('district_id', '=', 1)
            ->leftJoin('crop_categories', 'cultivation.category_id', '=', 'crop_categories.id')
            ->selectRaw('sum(cultivation.cultivatedLand) as sum, crop_categories.name')
            ->groupBy('crop_categories.name')
            ->get();

        // dd($cultivation);
        $cropCategory = array();
        $categoryAmount = array();
        foreach ($cultivation as $category) {
            $cropCategory[] = $category->name;
            $categoryAmount[] = $category->sum;
        }
        //dd($cropCategory);
        return view('dvcropcat.index', array('district' => $district, 'cropCategory' => $cropCategory, 'categoryAmount' => $categoryAmount));
    }

    public function showGraph(Request $request)
    {
        $crop_cat = CropCategory::all();
        $district = DB::table('districts')->get();
        $cultivation = cultivation::Where('district_id', '=', $request->district)
            ->leftJoin('crop_categories', 'cultivation.category_id', '=', 'crop_categories.id')
            ->selectRaw('sum(cultivatedLand) as sum, crop_categories.name')
            ->groupBy('crop_categories.name')
            ->get();

        //dd($cutivation);
        $cropCategory = array();
        $categoryAmount = array();
        foreach ($cultivation as $category) {
            $cropCategory[] = $category->name;
            $categoryAmount[] = $category->sum;
        }
        //dd($cropCategory);
        return view('dvcropcat.index', array('district' => $district, 'cropCategory' => $cropCategory, 'categoryAmount' => $categoryAmount));
   }

    public function index(){

        $cropcategory = CropCategory::all();
        
        return view('dvcropcat.index')->with('cropcategory', $cropcategory);

    }
}
