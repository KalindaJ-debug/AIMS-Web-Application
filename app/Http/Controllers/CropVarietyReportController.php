<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Variety;
use App\CropCategory;
use App\Crop;
use App\cultivation;
use App\harvests;
use App\District;
use PDF;

class CropVarietyReportController extends Controller{


    public function generatePDF(Request $request){
        //Input from district dropdown
        $district_id = $request->input('districtname');;
                   
        //Get district name
        $district_name = District::where('id', $district_id)->first(); 

        //Get total cultivated Land per district
        $total_cul = cultivation::where('district_id', $district_id)->sum('cultivatedLand');
        
        //Get total cultivated Land per district
        $total_harvest = harvests::where('district_id', $district_id)->sum('cultivatedLand');        

        //Cultivation extent
        $cultivation = DB::select('select v.name as name, sum(c.cultivatedLand) as sum
                                   from cultivation c,varieties v 
                                   where c.district_id = ? AND v.id = c.variety_id
                                   group by c.variety_id', [$district_id]);                                 
                                   
        // Harvest extent
        $harvest = DB::select('select v.name as name, sum(c.cultivatedLand) as sum
                                   from harvests c,varieties v 
                                   where c.district_id = ? AND v.id = c.variety_id
                                   group by c.variety_id', [$district_id]);   
                                   
        //PDF generation html code
        $htmlStream = '
        <div class="col-6">
            <div style="max-width:100%;background-color:#08260E;border:none;">
                <div class="row no-gutters">
          
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

        <h3 style="margin-left:240px;">CROP VARIETY SUMMARY</h3> <!--Main title -->

        <hr>


        <h3 style="margin-left:260px; font-family: sans-serif;">District : ' .$district_name->name. '</h3> <!--Main title -->

        <u><h4 style="margin-left:215px;">Crop Variety vs. Cultivated Land Extent</h3></u> <!--Table 1 title -->

        <br>

        <!-- Table 1 starts here -->

        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <tr>
            <th style="border: 1px solid; padding:12px;" width="5%">Crop Variety</th>
            <th style="border: 1px solid; padding:12px;" width="5%">Cultivated Land Extent (in Ha.)</th>

        </tr>
        ';
        foreach($cultivation as $cultivations){
            $htmlStream .='
            <tr style="text-align:center;">
                <td style="border: 1px solid; padding:12px;">'.$cultivations->name.'</td>
                <td style="border: 1px solid; padding:12px;">'.$cultivations->sum.'</td>
            
            </tr>
            ';
        } //end of foreach

        $htmlStream .= '</table>  <!-- Table 1 ends here -->
        <br>

        <br>

        <u><h4 style="margin-left:215px;">Crop Variety vs. Harvested Land Extent</h3></u> <!--Table 2 title -->

        <br>

        <!-- Table 2 starts here -->

        <table width="100%" style="border-collapse: collapse; border: 0px;">

        <tr>

            <th style="border: 1px solid; padding:12px;" width="5%">Crop Variety</th>
            <th style="border: 1px solid; padding:12px;" width="5%">Harvested Land Extent (in Ha.)</th>

        </tr>
        ';
        foreach($harvest as $harvests){
            $htmlStream .='
            <tr style="text-align:center;">
                <td style="border: 1px solid; padding:12px; text-alignment:center;">'.$harvests->name.'</td>
                <td style="border: 1px solid; padding:12px; text-alignment:center;">'.$harvests->sum.'</td>
            
           </tr>
            ';
        } //end of foreach

        $htmlStream .= '</table> <!-- Table 2 ends here -->
        <br>
        <br>
        <hr>
        <br>
        <p style="margin-left:30px;"><b>Total cultivated land extent in '.$district_name->name. ' &nbsp; : '.$total_cul.' &nbsp; hectares</b></p>
        <p style="margin-left:30px;"><b>Total harvested land extent in '.$district_name->name. ' &nbsp; : '.$total_harvest.' &nbsp; hectares</b></p>
        ';

        //stream pdf
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($htmlStream);
        return $pdf->stream('cropvariety.pdf');
    }


}