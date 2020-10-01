<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Farmer;
use App\Land;
use Illuminate\Support\Facades\App;

class LandReportController extends Controller
{
    
    //convert html to pdf method
    public function exportAllLandRecordsPDF($fid){
        
        //fetch farmer's land records
        $farmer = Farmer::where('id', $fid)->first(); //farmer name
        $landRecords = Land::with('provinces', 'districts')->where('farmer_id', $fid);

        //convert to html view for pdf
        $htmlStream = '
        <div class="col-6">
        <div style="max-width:60%;background-color:#08260E;border:none;">
        <div class="row no-gutters">
          <div class="col-md-4">
          </div>
          <div class="col-md-8">
            <div class="card-body text-center" style="padding:30px;color:white;">
              <h5 class="card-title">Agriculture Information Management System | AIMS </h5>
              <p class="card-text">Department of Agriculture.</p>
            </div>
          </div>
        </div>
      </div>
      </div>

      <br>
      <p style="margin-left:100px;">First Name: '.$farmer->firstName.'</p>
      <p style="margin-left:100px;">Last Name: '.$farmer->lastName.'</p>

    <table width="100%" style="border-collapse: collapse; border: 0px;">
    <tr>
        <th style="border: 1px solid; padding:12px;" width="5%">Land ID</th>
        <th style="border: 1px solid; padding:12px;" width="5%">Address No</th>
        <th style="border: 1px solid; padding:12px;" width="20%">Lane</th>
        <th style="border: 1px solid; padding:12px;" width="20%">City</th>
        <th style="border: 1px solid; padding:12px;" width="15%">District</th>
        <th style="border: 1px solid; padding:12px;" width="15%">Province</th>
        <th style="border: 1px solid; padding:12px;" width="20%">Land Extent (ha)</th>
    </tr>
        ';
        foreach($landRecords as $land){
            $htmlStream .='
            <tr>
            <td style="border: 1px solid; padding:12px;">'.$land->id.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->addressNo.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->laneName.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->city.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->districts->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->provinces->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->landExtend.'</td>
           </tr>
            ';
        } //end of foreach

        $htmlStream = '</table>';

        //stream pdf
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($htmlStream);
        return $pdf->stream();

    }//end of method

} //end of land report controller class
