<?php

namespace App\Http\Controllers\Graphs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\CropCategory;
use App\District;
use App\harvests;
use Illuminate\Support\Facades\DB;

class CropCategoryController extends Controller
{
    public function loadPage()
    {
        $crop_cat = CropCategory::all();
        $district = DB::table('districts')->get();
        $harvest = harvests::Where('district_id', '=', 1)
            ->leftJoin('crop_categories', 'harvests.category_id', '=', 'crop_categories.id')
            ->selectRaw('sum(cultivatedLand) as sum, crop_categories.name')
            ->groupBy('crop_categories.name')
            ->get();

        //dd($harvest);
        $cropCategory = array();
        $categoryAmount = array();
        foreach ($harvest as $category) {
            $cropCategory[] = $category->name;
            $categoryAmount[] = $category->sum;
        }
        //dd($cropCategory);
        return view('Graphs.cropcategoryharvest', array('district' => $district, 'cropCategory' => $cropCategory, 'categoryAmount' => $categoryAmount));
    }

    public function showGraph(Request $request)
    {
        $crop_cat = CropCategory::all();
        $district = DB::table('districts')->get();
        $harvest = harvests::Where('district_id', '=', $request->district)
            ->leftJoin('crop_categories', 'harvests.category_id', '=', 'crop_categories.id')
            ->selectRaw('sum(cultivatedLand) as sum, crop_categories.name')
            ->groupBy('crop_categories.name')
            ->get();

        //dd($harvest);
        $cropCategory = array();
        $categoryAmount = array();
        foreach ($harvest as $category) {
            $cropCategory[] = $category->name;
            $categoryAmount[] = $category->sum;
        }
        //dd($cropCategory);
        return view('Graphs.cropcategoryharvest', array('district' => $district, 'cropCategory' => $cropCategory, 'categoryAmount' => $categoryAmount));
    }
}
