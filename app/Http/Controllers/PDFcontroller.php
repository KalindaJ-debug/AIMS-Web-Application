<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\harvests;
use PDF;
use App\Land;
use App\Variety;
use Illuminate\Support\Facades\App;

class PDFcontroller extends Controller
{
    public function getPDF(){
        $harvests = harvests::all();

        //$harvests = harvests::select('id', 'land_id', 'cultivation_id', 'season', 'endDate', 'harvestedAmount' , 'cultivatedLand')->get();
    
        // /dd($harvests);
        // $harvestData = array();
        // foreach ($harvests as $harvest) {
        //     $row = [
        //         $harvest->id, 
        //         $harvest->land->farmer->firstName, 
        //         $harvest->land->farmer->lastName, 
        //         $harvest->season,
        //         $harvest->land->provinces->name, 
        //         $harvest->land->districts->name, 
        //         $harvest->land->regions->name, 
        //         $harvest->endDate
        //     ];
             
        //     array_push($harvestData, $row);
        // }

        // $pdf=PDF::loadView('PDF.harvest', ['harvests'=> $harvests ]);

        // return $pdf->stream('harvest.index.pdf');

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
      <h3 style="margin-left:250px;">Harvest Data</h3>
      <hr>
        <br>
    <table width="100%" style="border-collapse: collapse; border: 0px;">
    <tr>
        <th style="border: 1px solid; padding:12px;" width="5%">Harvest ID</th> 
        <th style="border: 1px solid; padding:12px;" width="10%">Crop</th> 
        <th style="border: 1px solid; padding:12px;" width="5%">Variety</th>   
        <th style="border: 1px solid; padding:12px;" width="10%">Region</th> 
        <th style="border: 1px solid; padding:12px;" width="5%">Season</th> 
        <th style="border: 1px solid; padding:12px;" width="5%">End Date</th> 
        <th style="border: 1px solid; padding:12px;" width="10%">Cultivated Amount</th> 
        <th style="border: 1px solid; padding:12px;" width="10%">Harvested Amount</th> 
    </tr>
        ';
        foreach($harvests as $harvest){
            $variety = Variety::where('id', $harvest->variety_id)->first();
            $land = Land::where('id', $harvest->land_id)->first();
            $htmlStream .='
            <tr>
            <td style="border: 1px solid; padding:12px;">'.$harvest->id.'</td>
            <td style="border: 1px solid; padding:12px;">'.$variety->crop->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$variety->name.'</td>
            <td style="border: 1px solid; padding:12px;">'.$land->regions->name.' ( '.$land->districts->name.' )</td>
            <td style="border: 1px solid; padding:12px;">'.$harvest->season.'</td>
            <td style="border: 1px solid; padding:12px;">'.$harvest->endDate.'</td>
            <td style="border: 1px solid; padding:12px;">'.$harvest->cultivatedLand.'</td>
            <td style="border: 1px solid; padding:12px;">'.$harvest->harvestedAmount.'</td>
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

    // public function index()
    // {
        

    //     return view('PDF.harvest', array( 'harvests' => $harvestData));

    // }
    
}
