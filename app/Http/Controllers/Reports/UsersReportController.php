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
        
        $users = User::all();

        $pdf = PDF::loadView('Reports.users', compact('users'));
        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);
        return $pdf->download('UserDetails.pdf');
    }

    public function sendUserEmailPDF(){
        $users = User::all();

        $pdf = PDF::loadView('Reports.users', compact('users'));
        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);
        
        \Mail::send('email.report', [], function ($message) use($pdf) {
            $message->to('krishricky4561@gmail.com');
            $message->subject('AIMS user list and activity');
            $message->attachData($pdf->output(), 'usersList.pdf', [
                'mime' => 'application/pdf'
            ]);
        });

        return view('home');
    }
    
}
