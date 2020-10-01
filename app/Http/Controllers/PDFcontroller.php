<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Harvest;

class PDFcontroller extends Controller
{
    public function getPDF(){
        $harvests = Harvest::all();
        $pdf=PDF::loadView('pdf.harvest', ['harvests'=> $harvests ]);
        return $pdf->stream('harvest.index.pdf');
    }
}
