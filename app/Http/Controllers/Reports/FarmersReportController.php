<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use PDF;
use Mail;
use App\Farmer;
use Illuminate\Support\Facades\Auth;

class FarmersReportController extends Controller
{
    public function getFarmersPDF(){
        $farmer = Farmer::all();

        $pdf = PDF::loadView('Reports.farmers', compact('farmer'));
        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);
        return $pdf->download('FarmerDetails.pdf');
    }

    public function sendFarmerEmailPDF(){
        $farmer = Farmer::all();

        $pdf = PDF::loadView('Reports.farmers', compact('farmer'));
        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);
        
        \Mail::send('email.report', [], function ($message) use($pdf) {
            $message->to(Auth::user()->email);
            $message->subject('AIMS farmer list and activity');
            $message->attachData($pdf->output(), 'farmersList.pdf', [
                'mime' => 'application/pdf'
            ]);
        });

        return view('home');
    }
}
