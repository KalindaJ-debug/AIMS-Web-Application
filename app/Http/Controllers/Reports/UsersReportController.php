<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use PDF;
use Mail;
use App\User;
use App\Farmer;

class UsersReportCOntroller extends Controller
{
    public function getUsersPDF(Request $request){

        $fields = $request->get('fields');
        
        $users = User::all();

        $pdf = PDF::loadView('Reports.users', compact('users','fields'));

        if($request->get('orientation') == 'landscape'){
            $pdf->setOption('orientation','landscape');
        }

        if($request->get('page') == 'A6'){
            $pdf->setOption('page-size','a6');
        }

        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);

        if($request->get('sendEmail') == 'send'){
            \Mail::send('email.report', [], function ($message) use($pdf,$request) {
                $message->to($request->get('email'));
                $message->subject('AIMS user list and activity');
                $message->attachData($pdf->output(), 'usersList.pdf', [
                    'mime' => 'application/pdf'
                ]);
            });
        }

        return $pdf->download('UserDetails.pdf');
    }

    
}
