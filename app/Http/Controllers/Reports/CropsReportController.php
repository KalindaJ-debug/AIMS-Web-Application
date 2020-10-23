<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CropCategory;
use App\Crop;
use App\Variety;
use App\Harvest;
use App;
use App\harvests;
use PDF;
use Mail;

class CropsReportController extends Controller
{
    public function getCropsPDF(Request $request){
        $variety = Variety::all();
        $crop = Crop::all();
        $category = CropCategory::all();

        if($request->get('fields') == 'District'){
            $crop_categories = harvests::Where('district_id', '=', $request->district_select)
            ->Join('crop_categories', 'harvests.category_id', '=', 'crop_categories.id')
            ->selectRaw('sum(cultivatedLand) as sum, crop_categories.name')
            ->groupBy('crop_categories.name')
            ->get();

            $crop_varieties = harvests::Where('district_id', '=', $request->district_select)
            ->Join('varieties', 'harvests.variety_id', '=', 'varieties.id')
            ->selectRaw('sum(cultivatedLand) as sum, varieties.name')
            ->groupBy('varieties.name')
            ->get();

            $crop_list = harvests::Where('district_id', '=', $request->district_select)
            ->Join('crops', 'harvests.crop_id', '=', 'crops.id')
            ->selectRaw('sum(cultivatedLand) as sum, crops.name')
            ->groupBy('crops.name')
            ->get();

            $pdf = PDF::loadView('Reports.cropsgraph', array('crop_categories' => $crop_categories,'crop_list' => $crop_list, 'crop_varieties' => $crop_varieties, 'varieties' => $variety, 'crop' => $crop, 'category' => $category, 'categoryList' => $category, 'cropList' => $crop, 'categoryAddList' => $category, 'cropAddList' => $crop));
            if ($request->get('orientation') == 'landscape') {
                $pdf->setOption('orientation', 'landscape');
            }
    
            if ($request->get('page') == 'A6') {
                $pdf->setOption('page-size', 'a6');
            }
    
            $pdf->setOptions([
                'footer-center' => '[page]',
                'footer-left' => '[date]',
                'footer-right' => 'AIMS Sri Lanka',
            ]);
    
            if ($request->get('sendEmail') == 'send') {
                return \Mail::send('email.report', [], function ($message) use ($pdf, $request) {
                    $message->to($request->get('email'));
                    $message->subject('AIMS user list and activity');
                    $message->attachData($pdf->output(), 'CropList.pdf', [
                        'mime' => 'application/pdf'
                    ]);
                });
            }
            return $pdf->download('CropDetails.pdf');
        }else{
            $pdf = PDF::loadView('Reports.crops', array('varieties' => $variety, 'crop' => $crop, 'category' => $category, 'categoryList' => $category, 'cropList' => $crop, 'categoryAddList' => $category, 'cropAddList' => $crop));
        

            if ($request->get('orientation') == 'landscape') {
                $pdf->setOption('orientation', 'landscape');
            }
    
            if ($request->get('page') == 'A6') {
                $pdf->setOption('page-size', 'a6');
            }
    
            $pdf->setOptions([
                'footer-center' => '[page]',
                'footer-left' => '[date]',
                'footer-right' => 'AIMS Sri Lanka',
            ]);
    
            if ($request->get('sendEmail') == 'send') {
                return \Mail::send('email.report', [], function ($message) use ($pdf, $request) {
                    $message->to($request->get('email'));
                    $message->subject('AIMS user list and activity');
                    $message->attachData($pdf->output(), 'CropList.pdf', [
                        'mime' => 'application/pdf'
                    ]);
                });
            }
    
            return $pdf->download('CropDetails.pdf');
        }
    }

}
