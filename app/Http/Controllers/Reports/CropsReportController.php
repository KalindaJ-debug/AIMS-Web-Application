<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CropCategory;
use App\Crop;
use App\Variety;
use App;
use PDF;
use Mail;

class CropsReportController extends Controller
{
    public function getCropsPDF(){
        $variety = Variety::all();
        $crop = Crop::all();
        $category = CropCategory::all();

        $pdf = PDF::loadView('Reports.crops', array('varieties' => $variety, 'crop' => $crop, 'category' => $category, 'categoryList' => $category, 'cropList' => $crop, 'categoryAddList' => $category, 'cropAddList' => $crop));
        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);
        return $pdf->download('CropDetails.pdf');
    }

    public function sendCropsEmailPDF(){
        $variety = Variety::all();
        $crop = Crop::all();
        $category = CropCategory::all();

        $pdf = PDF::loadView('Reports.crops', array('varieties' => $variety, 'crop' => $crop, 'category' => $category, 'categoryList' => $category, 'cropList' => $crop, 'categoryAddList' => $category, 'cropAddList' => $crop));
        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);
        
        Mail::send('email.report', [], function ($message) use($pdf) {
            $message->to('krishricky4561@gmail.com');
            $message->subject('AIMS farmer list and activity');
            $message->attachData($pdf->output(), 'CropList.pdf', [
                'mime' => 'application/pdf'
            ]);
        });
        
    }
}
