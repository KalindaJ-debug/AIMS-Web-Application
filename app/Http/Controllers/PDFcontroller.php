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
}
