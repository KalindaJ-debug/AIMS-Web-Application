<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\harvests;

class PDFcontroller extends Controller
{
    public function getPDF(){
        $harvests = harvests::all();
        $pdf=PDF::loadView('PDF.harvest', ['harvests'=> $harvests ]);
        return $pdf->stream('harvest.index.pdf');
    }

    public function index()
    {
      /*  $Cultivation = Cultivation::select('id', 'land_id', 'season', 'startDate', 'endDate', 'status')->get();

        $cultivatedData = array();
        foreach ($Cultivation as $cultivate) {
            $row = [
                $cultivate->id, 
                $cultivate->land->farmer->firstName, 
                $cultivate->land->farmer->lastName, 
                $cultivate->season
            ];
            
            array_push(
                $row, 
                $cultivate->land->provinces->name, 
                $cultivate->land->districts->name, 
                $cultivate->land->regions->name, 
                $cultivate->startDate, 
                $cultivate->endDate, 
                $cultivate->status
            );
            
            array_push($cultivatedData, $row);
        }
        */
        $harvests = harvests::select('id', 'land_id', 'cultivation_id', 'season', 'endDate', 'harvestedAmount' , 'cultivatedLand')->get();
        //dd($approvalHarvest[0]->approvalHarvest);

        $harvestData = array();
        foreach ($harvests as $harvest) {
            //dd($harvest->crop);
            $row = [
                $harvest->id, 
                $harvest->land->farmer->firstName, 
                $harvest->land->farmer->lastName, 
                $harvest->season
            ];
            
            array_push(
                $row, 
                $harvest->land->provinces->name, 
                $harvest->land->districts->name, 
                $harvest->land->regions->name, 
                $harvest->endDate
                 
                );
            
            array_push($harvestData, $row);
        }

        //dd($cultivatedData);
        return view('PDF.harvest', array( 'harvests' => $harvestData));

    }
    
}
