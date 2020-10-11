<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Farmer;
use App\Land;
use App\Province;
use App\District;
use App\LandType;
use Illuminate\Support\Facades\App;

class LandReportController extends Controller
{
    
    //convert html to pdf method
    public function exportAllLandRecordsPDF($fid){
    
        //fetch farmer's land records
        $farmer = Farmer::where('id', $fid)->first(); //farmer name
        $landRecords = Land::with('land_type','provinces', 'districts')->where('farmer_id', $fid)->paginate(20);

        //convert to html view for pdf
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
      <h3 style="margin-left:250px;">Farmer Land Information</h3>
      <p style="margin-left:50px;">Full Name: '.$farmer->firstName.'  '.$farmer->lastName.' </p>
      <hr>
        <br>
        <p> ** All property details registered are listed below </p>
        <br>
    <table width="100%" style="border-collapse: collapse; border: 0px;">
    <tr>
        <th style="border: 1px solid; padding:12px;" width="5%">Land ID</th>
        <th style="border: 1px solid; padding:12px;" width="5%">Address No</th>
        <th style="border: 1px solid; padding:12px;" width="20%">Lane</th>
        <th style="border: 1px solid; padding:12px;" width="20%">Land Type</th>
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
            <td style="border: 1px solid; padding:12px;">'.$land->land_type->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->districts->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->provinces->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->landExtend.'</td>
           </tr>
            ';
        } //end of foreach

        $htmlStream .= '</table>
        <br>
        
        ';

        //stream pdf
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($htmlStream);
        return $pdf->stream();

    }//end of method

    //export to pdf - single land record
    public function exportLandRecordPDF($lid){
        $land = Land::find($lid);
        $farmer = Farmer::where('id', $land->farmer_id)->first();
        $province = Province::where('id', $land->province_id)->first();
        $district = District::where('id', $land->district_id)->first();
        $landType = LandType::where('id', $land->land_type_id)->first();
        
        //html stream for pdf
        $landHTMLStream = '
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
      <h3 style="margin-left:250px;">Farmer Land Information</h3> <br>
      <p style="margin-left:20px;">Full Name: <b>'.$farmer->firstName.'  '.$farmer->lastName.'</b> </p> <br>
      <hr> 
      <table style="border-collapse:collapse;width:100%;">
       <tr>
         <th style="padding:15px;text-align:left;background-color: #ffa;"> Land ID </th>
         <td style="padding:15px;text-align:left;background-color: #ffa;"> : '.$land->id.' </td>
         <td style="background-color: #ffa;"></td>
         <td style="background-color: #ffa;"></td>
       </tr>

       <tr>
         <th style="padding:15px;text-align:left;"> Address No </th>
         <td style="padding:15px;text-align:left;"> : '.$land->addressNo.' </td>
         <th style="padding:15px;text-align:left;"> Street </th>
         <td style="padding:15px;text-align:left;"> : '.$land->streetName.' </td>
       </tr>

       <tr>
         <th style="padding:15px;text-align:left;"> Lane </th>
         <td style="padding:15px;text-align:left;"> : '.$land->laneName.' </td>
         <th style="padding:15px;text-align:left;"> Town </th>
         <td style="padding:15px;text-align:left;"> : '.$land->town.' </td>
       </tr>

       <tr>
         <th style="padding:15px;text-align:left;"> Land Type </th>
         <td style="padding:15px;text-align:left;"> : '.$landType->name.' </td>
         <th style="padding:15px;text-align:left;"> GND No </th>
         <td style="padding:15px;text-align:left;"> : '.$land->gnd.' </td>
       </tr>

       <tr>
         <td style="height:20px;"></td>
       </tr>

       <tr>
         <th style="padding:15px;text-align:left;"> District </th>
         <td style="padding:15px;text-align:left;"> : '.$district->name.' </td>
         <td></td>
         <td></td>
       </tr>

       <tr>
         <th style="padding:15px;text-align:left;"> Province </th>
         <td style="padding:15px;text-align:left;"> : '.$province->name.' </td>
         <td></td>
         <td></td>
       </tr>

       <tr>
         <td style="height:20px;"></td>
       </tr>

       <tr>
         <th style="padding:15px;text-align:left;"> Postal Code </th>
         <td style="padding:15px;text-align:left;"> : '.$land->postalCode.' </td>
         <td></td>
         <td></td>
       </tr>

       <tr>
         <th style="padding:15px;text-align:left;"> Planning Number </th>
         <td style="padding:15px;text-align:left;"> : '.$land->planningNumber.' </td>
         <td></td>
         <td></td>
       </tr>

       <tr>
         <td style="height:20px;"></td>
         <td></td>
         <th style="padding:15px;text-align:left;background-color: #ffa;"> Land Extent (ha) </th>
         <td style="padding:15px;text-align:left;background-color: #ffa;"> : '.$land->landExtend.' </td>
       </tr>

       <tr>
         <td style="height:50px;"></td>
       </tr>

       <tr>
         <td style="padding:15px;text-align:left;"> Registered At </td>
         <td style="padding:15px;text-align:left;"> : '.$land->created_at.' </td>
         <td></td>
         <td></td>
       </tr>

       <tr>
         <td style="padding:15px;text-align:left;"> Updated On </td>
         <td style="padding:15px;text-align:left;">: '.$land->updated_at.'</td>
         <td></td>
         <td></td>
       </tr>

     </table>
        ';

        //stream pdf
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($landHTMLStream);
        return $pdf->stream();

    }//end of method

} //end of land report controller class
