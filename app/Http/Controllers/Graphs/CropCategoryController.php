<?php

namespace App\Http\Controllers\Graphs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\Crop;
use App\CropCategory;
use App\District;
use App\harvests;
use App\Variety;
use Illuminate\Support\Facades\DB;

class CropCategoryController extends Controller
{
    public function loadPage()
    {
        $crop_cat = CropCategory::all();
        $district = DB::table('districts')->get();
        $harvest = harvests::Where('district_id', '=', 1)
            ->Where('season', '=', 'Maha')
            ->Join('crop_categories', 'harvests.category_id', '=', 'crop_categories.id')
            ->selectRaw('sum(cultivatedLand) as sum, crop_categories.name')
            ->groupBy('crop_categories.name')
            ->get();

            $string = "Data for the Maha Season in Colombo";

        //dd($harvest);
        $cropCategory = array();
        $categoryAmount = array();
        foreach ($harvest as $category) {
            $cropCategory[] = $category->name;
            $categoryAmount[] = $category->sum;
        }
        
        //dd($cropCategory);
        return view('Graphs.cropcategoryharvest',array('district' => $district, 'cropCategory' => $cropCategory, 'categoryAmount' => $categoryAmount, 'string' => $string));
    }

    public function showGraph(Request $request)
    {
        $crop_cat = CropCategory::all();
        $district = DB::table('districts')->get();
        $districtName = District::Where('id', '=', $request->district)
                    ->pluck('name');

        $harvest = harvests::Where('district_id', '=', $request->district )
            ->Where('season', '=', $request->season)
            ->Join('crop_categories', 'harvests.category_id', '=', 'crop_categories.id')
            ->selectRaw('sum(cultivatedLand) as sum, crop_categories.name')
            ->groupBy('crop_categories.name')
            ->get();

            $string = "Data for the ".$request->season." Season in ".$districtName[0];
        //dd($harvest);
        $cropCategory = array();
        $categoryAmount = array();
        foreach ($harvest as $category) {
            $cropCategory[] = $category->name;
            $categoryAmount[] = $category->sum;
        }
        //dd($cropCategory);
        return view('Graphs.cropcategoryharvest', array('district' => $district, 'cropCategory' => $cropCategory, 'categoryAmount' => $categoryAmount,'string' => $string));
    }

    public function loadHarvestAndCultivation(){
        $crop_cat = CropCategory::all();
        $harvest = harvests::Where('harvests.category_id', '=', 1)
            ->Where('harvests.season', '=', 'Maha')
            ->LeftJoin('districts', 'harvests.district_id', '=', 'districts.id')
            ->LeftJoin('cultivation', 'harvests.cultivation_id', '=', 'cultivation.id' )
            ->selectRaw('sum(harvests.cultivatedLand) as sumHarvest, sum(cultivation.cultivatedLand) as sumCultivation,districts.name')
            ->groupBy('districts.name')
            ->get();

            $district = array();
            $harvestSum = array();
            $cultivationSum = array();
            foreach ($harvest as $category) {
                $district[] = $category->name;
                $harvestSum[] = $category->sumHarvest;
                $cultivationSum[] = $category->sumCultivation;
            }

            $string = "Data for the Maha Season for Vegetables";

            return view('Graphs.cropcategorycovered', array('crop_cat' => $crop_cat,'district' => $district, 'harvestSum' => $harvestSum, 'cultivationSum' => $cultivationSum,'string' => $string));

    }

    public function generateHarvestAndCultivation(Request $request){
        $crop_cat = CropCategory::all();
        $harvest = harvests::Where('harvests.category_id', '=', $request->crop_category)
            ->Where('harvests.season', '=', 'Maha')
            ->LeftJoin('districts', 'harvests.district_id', '=', 'districts.id')
            ->LeftJoin('cultivation', 'harvests.cultivation_id', '=', 'cultivation.id' )
            ->selectRaw('sum(harvests.cultivatedLand) as sumHarvest, sum(cultivation.cultivatedLand) as sumCultivation,districts.name')
            ->groupBy('districts.name')
            ->get();

            //dd($harvest);

            $categoryName = CropCategory::Where('id', '=', $request->crop_category)
                   ->pluck('name');
            $district = array();
            $harvestSum = array();
            $cultivationSum = array();
            foreach ($harvest as $category) {
                $district[] = $category->name;
                $harvestSum[] = $category->sumHarvest;
                $cultivationSum[] = $category->sumCultivation;
            }

            $string = "Data for the ".$request->season." Season for ".$categoryName[0];

            return view('Graphs.cropcategorycovered', array('crop_cat' => $crop_cat,'district' => $district, 'harvestSum' => $harvestSum, 'cultivationSum' => $cultivationSum,'string' => $string));

    }

    public function loadHarvestAndCultivationVariety(){
        $crop_cat = Variety::all();
        $harvest = harvests::Where('harvests.variety_id', '=', 1)
            ->Where('harvests.season', '=', 'Maha')
            ->LeftJoin('districts', 'harvests.district_id', '=', 'districts.id')
            ->LeftJoin('cultivation', 'harvests.cultivation_id', '=', 'cultivation.id' )
            ->selectRaw('sum(harvests.cultivatedLand) as sumHarvest, sum(cultivation.cultivatedLand) as sumCultivation,districts.name')
            ->groupBy('districts.name')
            ->get();

            $district = array();
            $harvestSum = array();
            $cultivationSum = array();
            foreach ($harvest as $category) {
                $district[] = $category->name;
                $harvestSum[] = $category->sumHarvest;
                $cultivationSum[] = $category->sumCultivation;
            }

            $string = "Data for the Maha Season for Vegetables";

            return view('Graphs.cropcategorycoveredvariety', array('crop_cat' => $crop_cat,'district' => $district, 'harvestSum' => $harvestSum, 'cultivationSum' => $cultivationSum,'string' => $string));

    }

    public function generateHarvestAndCultivationVariety(Request $request){
        $crop_cat = Crop::all();
        $harvest = harvests::Where('harvests.variety_id', '=', $request->crop_category)
            ->Where('harvests.season', '=', 'Maha')
            ->LeftJoin('districts', 'harvests.district_id', '=', 'districts.id')
            ->LeftJoin('cultivation', 'harvests.cultivation_id', '=', 'cultivation.id' )
            ->selectRaw('sum(harvests.cultivatedLand) as sumHarvest, sum(cultivation.cultivatedLand) as sumCultivation,districts.name')
            ->groupBy('districts.name')
            ->get();

            //dd($harvest);

            $categoryName = Crop::Where('id', '=', $request->crop_category)
                   ->pluck('name');
            $district = array();
            $harvestSum = array();
            $cultivationSum = array();
            foreach ($harvest as $category) {
                $district[] = $category->name;
                $harvestSum[] = $category->sumHarvest;
                $cultivationSum[] = $category->sumCultivation;
            }

            $string = "Data for the ".$request->season." Season for ".$categoryName[0];

            return view('Graphs.cropcategorycoveredvariety', array('crop_cat' => $crop_cat,'district' => $district, 'harvestSum' => $harvestSum, 'cultivationSum' => $cultivationSum,'string' => $string));

    }

    public function loadHarvestAndCultivationCrop(){
        $crop_cat = Crop::all();
        $harvest = harvests::Where('harvests.crop_id', '=', 1)
            ->Where('harvests.season', '=', 'Maha')
            ->LeftJoin('districts', 'harvests.district_id', '=', 'districts.id')
            ->LeftJoin('cultivation', 'harvests.cultivation_id', '=', 'cultivation.id' )
            ->selectRaw('sum(harvests.cultivatedLand) as sumHarvest, sum(cultivation.cultivatedLand) as sumCultivation,districts.name')
            ->groupBy('districts.name')
            ->get();

            $district = array();
            $harvestSum = array();
            $cultivationSum = array();
            foreach ($harvest as $category) {
                $district[] = $category->name;
                $harvestSum[] = $category->sumHarvest;
                $cultivationSum[] = $category->sumCultivation;
            }

            $string = "Data for the Maha Season for Brinjol";

            return view('Graphs.cropcategorycoveredcrop', array('crop_cat' => $crop_cat,'district' => $district, 'harvestSum' => $harvestSum, 'cultivationSum' => $cultivationSum,'string' => $string));

    }

    public function generateHarvestAndCultivationCrop(Request $request){
        $crop_cat = Crop::all();
        $harvest = harvests::Where('harvests.crop_id', '=', $request->crop_category)
            ->Where('harvests.season', '=', 'Maha')
            ->LeftJoin('districts', 'harvests.district_id', '=', 'districts.id')
            ->LeftJoin('cultivation', 'harvests.cultivation_id', '=', 'cultivation.id' )
            ->selectRaw('sum(harvests.cultivatedLand) as sumHarvest, sum(cultivation.cultivatedLand) as sumCultivation,districts.name')
            ->groupBy('districts.name')
            ->get();

            //dd($harvest);

            $categoryName = Crop::Where('id', '=', $request->crop_category)
                   ->pluck('name');
            $district = array();
            $harvestSum = array();
            $cultivationSum = array();
            foreach ($harvest as $category) {
                $district[] = $category->name;
                $harvestSum[] = $category->sumHarvest;
                $cultivationSum[] = $category->sumCultivation;
            }

            $string = "Data for the ".$request->season." Season for ".$categoryName[0];

            return view('Graphs.cropcategorycoveredcrop', array('crop_cat' => $crop_cat,'district' => $district, 'harvestSum' => $harvestSum, 'cultivationSum' => $cultivationSum,'string' => $string));

    }
}
