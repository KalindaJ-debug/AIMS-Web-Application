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

use PDF;
use Illuminate\Support\Facades\App;

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

    public function harvestPdfConvert($id) {
        $harvestArray = array();
        $harvestData = array();
        $harvest = Harvest::where('crop_id', $id)->get();
        foreach ($harvest as $harvest) {
            $land = Land::where('id', $harvest->land_id)->first();
            array_push($harvestData, $harvest->id);
            array_push($harvestData, $land->districts->name);
            array_push($harvestData, $harvest->cultivatedLand);
            array_push($harvestArray, $harvestData);
        }

        $htmlStream = '
        <div class="col-6">
        <div style="max-width:100%;background-color:#08260E;border:none;">
        <div class="row no-gutters">
          <div class="col-md-4">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center" style="padding:30px;color:white;">
              <h2 class="card-title" style="margin-left:20px;">Agriculture Information Management System | AIMS </h2>
              <p class="card-text" style="margin-left:400px;">Department of Agriculture</p>
            </div>
          </div>
        </div>
      </div>
      </div>

      <br>
      <h3 style="margin-left:250px;">Crop Harvest Data</h3>
      <hr>
        <br>
        <p> ** Harvest per District Information </p>
        <br>
    <table width="100%" style="border-collapse: collapse; border: 0px;">
    <tr>
        <th style="border: 1px solid; padding:12px;" width="20%">Harvest ID</th>
        <th style="border: 1px solid; padding:12px;" width="40%">District</th> 
        <th style="border: 1px solid; padding:12px;" width="40%">Land Extent (ha)</th>
    </tr>
        ';
        foreach($harvestArray as $harvest){
            $htmlStream .='
            <tr>
            <td style="border: 1px solid; padding:12px;">'.$harvest[0].'</td>
            <td style="border: 1px solid; padding:12px;">'.$harvest[1].'</td>
            <td style="border: 1px solid; padding:12px;">'.$harvest[2].'</td>
           </tr>
            ';
        } //end of foreach

        $htmlStream .= '</table>
        <br>
        
        ';
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($htmlStream);
        return $pdf->stream();  
    } 

    public function cultivationPdfConvert($id) {
        $cultivationArray = array();
        $cultivationData = array();
            $cultivation = cultivation::where('crop_id', $id)->get();
            foreach ($cultivation as $cultivation) {
                $land = Land::where('id', $cultivation->land_id)->first();
                array_push($cultivationData, $cultivation->id);
                array_push($cultivationData, $land->districts->name);
                array_push($cultivationData, $cultivation->cultivatedLand);
                array_push($cultivationArray, $cultivationData);
            }

        $htmlStream = '
        <div class="col-6">
        <div style="max-width:100%;background-color:#08260E;border:none;">
        <div class="row no-gutters">
          <div class="col-md-4">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center" style="padding:30px;color:white;">
              <h2 class="card-title" style="margin-left:20px;">Agriculture Information Management System | AIMS </h2>
              <p class="card-text" style="margin-left:400px;">Department of Agriculture</p>
            </div>
          </div>
        </div>
      </div>
      </div>

      <br>
      <h3 style="margin-left:250px;">Crop Cultivation Data</h3>
      <hr>
        <br>
        <p> ** Cultivation per District Information </p>
        <br>
    <table width="100%" style="border-collapse: collapse; border: 0px;">
    <tr>
        <th style="border: 1px solid; padding:12px;" width="20%">Cultivation ID</th>
        <th style="border: 1px solid; padding:12px;" width="40%">District</th> 
        <th style="border: 1px solid; padding:12px;" width="40%">Land Extent (ha)</th>
    </tr>
        ';
        foreach($cultivationArray as $cultivation){
            $htmlStream .='
            <tr>
            <td style="border: 1px solid; padding:12px;">'.$cultivation[0].'</td>
            <td style="border: 1px solid; padding:12px;">'.$cultivation[1].'</td>
            <td style="border: 1px solid; padding:12px;">'.$cultivation[2].'</td>
           </tr>
            ';
        } //end of foreach

        $htmlStream .= '</table>
        <br>
        
        ';
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($htmlStream);
        return $pdf->stream();  
    } 
}
