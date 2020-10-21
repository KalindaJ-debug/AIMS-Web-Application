<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Approval;
use App\Farmer;
use App\Province;
use App\District;
use App\Region;
use App\ApprovalData;
use App\CropCategory;
use App\Crop;
use App\Variety;
use App\cultivation;
use App\Land;
use App\Harvest;

class CropVisualizationController extends Controller
{
    public function index() {
        $crop = Crop::select('id', 'name')->get();
        return view('cropVisualization.cropvisualization', array('crops' => $crop));
    }

    public function cropHarvestSelect($id) {
        $cropId = $id;
        $crop = Crop::all();
        $province = Province::all();
        $district = District::all();
        $region = Region::all();
        $harvest = Harvest::all();
        $land = Land::all();


        $harvestArray = array();
        foreach ($harvest as $harvest) {
            $harvestData = array();
            $land = Land::where('id', $harvest->land_id)->first();
            array_push($harvestData, $land->districts->name);
            array_push($harvestData, $harvest->cultivatedLand);
            array_push($harvestArray, $harvestData);
        }

        return view(
            'cropVisualization.harvest', array(
            'crops' => $crop, 
            'provinces' => $province, 
            'districts' => $district, 'regions' => $region, 
            'harvests' => $harvestArray, 
            'cropId' => $cropId
        ));
    }

    public function updateHarvest(Request $request) {
        $cropId = $request->input('cropId');
        $crop = Crop::all();
        $province = Province::all();
        $district = District::all();
        $region = Region::all();
        
        $harvestArray = array();
        if ($request->input('provinceCheck') == 'on') {
            $harvestData = array();
            $land = Land::where('province_id', $request->input('provinceId'))->get();
            foreach ($land as $land) {
                $harvests = Harvest::where('land_id', $land->id)->where('crop_id', $request->input('cropId'))->get();
                foreach ($harvests as $harvest) {
                    if ($harvest != null) {
                        array_push($harvestData, $land->districts->name);
                        array_push($harvestData, $harvest->cultivatedLand);
                        array_push($harvestArray, $harvestData);
                    }
                }
            }
        } else if ($request->input('districtCheck') == 'on') {
            $land = Land::where('district_id', $request->input('districtId'))->get();
            $harvestData = array();
            foreach ($land as $land) {
                $harvests = Harvest::where('land_id', $land->id)->where('crop_id', $request->input('cropId'))->get();
                foreach ($harvests as $harvest) {
                    if ($harvest != null) {
                        array_push($harvestData, $land->districts->name);
                        array_push($harvestData, $harvest->cultivatedLand);
                        array_push($harvestArray, $harvestData);
                    }
                }
            }
            
        } else if ($request->input('regionCheck') == 'on') {
            $land = Land::where('region_id', $request->input('regionId'))->get();
            $harvestData = array();
            foreach ($land as $land) {
                $harvests = Harvest::where('land_id', $land->id)->where('crop_id', $request->input('cropId'))->get();
                foreach ($harvests as $harvest) {
                    if ($harvest != null) {
                        array_push($harvestData, $land->districts->name);
                        array_push($harvestData, $harvest->cultivatedLand);
                        array_push($harvestArray, $harvestData);
                    }
                } 
            }   
        } else {
            $harvestData = array();
            $harvest = Harvest::where('crop_id', $request->input('cropId'))->get();
            foreach ($harvest as $harvest) {
                $land = Land::where('id', $harvest->land_id)->first();
                array_push($harvestData, $land->districts->name);
                array_push($harvestData, $harvest->cultivatedLand);
                array_push($harvestArray, $harvestData);
            }
        }

        return view(
            'cropVisualization.harvest', array(
            'crops' => $crop, 
            'provinces' => $province, 
            'districts' => $district, 
            'regions' => $region, 
            'harvests' => $harvestArray, 
            'cropId' => $cropId
        ));
    }

    public function cropCultivationSelect($id) {
        $cropId = $id;
        $crop = Crop::all();
        $province = Province::all();
        $district = District::all();
        $region = Region::all();
        $cultivations = cultivation::all();
        $land = Land::all();


        $cultivationArray = array();
        foreach ($cultivations as $cultivation) {
            $cultivationData = array();
            $land = Land::where('id', $cultivation->land_id)->first();
            array_push($cultivationData, $land->districts->name);
            array_push($cultivationData, $cultivation->cultivatedLand);
            array_push($cultivationArray, $cultivationData);
        }

        return view(
            'cropVisualization.cultivation', array(
            'crops' => $crop, 
            'provinces' => $province, 
            'districts' => $district, 'regions' => $region, 
            'cultivations' => $cultivationArray, 
            'cropId' => $cropId
        ));
    }

    public function updateCultivation(Request $request) {
        $cropId = $request->input('cropId');
        $crop = Crop::all();
        $province = Province::all();
        $district = District::all();
        $region = Region::all();
        
        $cultivationArray = array();
        if ($request->input('provinceCheck') == 'on') {
            $cultivationData = array();
            $land = Land::where('province_id', $request->input('provinceId'))->get();
            foreach ($land as $land) {
                $cultivations = cultivation::where('land_id', $land->id)->where('crop_id', $request->input('cropId'))->get();
                foreach ($cultivations as $cultivation) {
                    if ($cultivation != null) {
                        array_push($cultivationData, $land->districts->name);
                        array_push($cultivationData, $cultivation->cultivatedLand);
                        array_push($cultivationArray, $cultivationData);
                    }
                }
            }
        } else if ($request->input('districtCheck') == 'on') {
            $land = Land::where('district_id', $request->input('districtId'))->get();
            $cultivationData = array();
            foreach ($land as $land) {
                $cultivations = cultivation::where('land_id', $land->id)->where('crop_id', $request->input('cropId'))->get();
                foreach ($cultivations as $cultivation) {
                    if ($cultivation != null) {
                        array_push($cultivationData, $land->districts->name);
                        array_push($cultivationData, $cultivation->cultivatedLand);
                        array_push($cultivationArray, $cultivationData);
                    }
                }
            }
            
        } else if ($request->input('regionCheck') == 'on') {
            $land = Land::where('region_id', $request->input('regionId'))->get();
            $cultivationData = array();
            foreach ($land as $land) {
                $cultivations = cultivation::where('land_id', $land->id)->where('crop_id', $request->input('cropId'))->get();
                foreach ($cultivations as $cultivation) {
                    if ($cultivation != null) {
                        array_push($cultivationData, $land->districts->name);
                        array_push($cultivationData, $cultivation->cultivatedLand);
                        array_push($cultivationArray, $cultivationData);
                    }
                } 
            }   
        } else {
            $cultivationData = array();
            $cultivation = cultivation::where('crop_id', $request->input('cropId'))->get();
            foreach ($cultivation as $cultivation) {
                $land = Land::where('id', $cultivation->land_id)->first();
                array_push($cultivationData, $land->districts->name);
                array_push($cultivationData, $cultivation->cultivatedLand);
                array_push($cultivationArray, $cultivationData);
            }
        }

        return view(
            'cropVisualization.cultivation', array(
            'crops' => $crop, 
            'provinces' => $province, 
            'districts' => $district, 
            'regions' => $region, 
            'cultivations' => $cultivationArray, 
            'cropId' => $cropId
        ));
    }
}
