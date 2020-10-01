<?php

namespace App\Http\Controllers;
use App;
use PDF;
use Mail;
use App\User;
use App\Farmer;
use Illuminate\Http\Request;

class UserReportController extends Controller
{
    public function getUsersPDF(){
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
        
        Mail::send('email.report', [], function ($message) use($pdf) {
            $message->to('krishricky4561@gmail.com');
            $message->subject('AIMS user list and activity');
            $message->attachData($pdf->output(), 'usersList.pdf', [
                'mime' => 'application/pdf'
            ]);
        });

        return view('home');
    }
    
    public function getFarmersPDF(){
        $farmers = Farmer::all();

        $pdf = PDF::loadView('Reports.farmers', compact('farmers'));
        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);
        return $pdf->download('FarmerDetails.pdf');
    }
    
    
}
