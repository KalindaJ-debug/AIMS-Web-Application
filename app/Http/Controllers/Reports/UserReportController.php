<?php

namespace App\Http\Controllers;
use App;
use PDF;
use App\User;
use Illuminate\Http\Request;

class UserReportController extends Controller
{
    public function getPDF(){
        $users = User::all();

        $pdf = PDF::loadView('Reports.users', compact('users'));
        $pdf->setOptions([
            'footer-center' => '[page]',
            'footer-left' => '[date]',
            'footer-right' => 'AIMS Sri Lanka',
        ]);
        return $pdf->download('UserDetails.pdf');
    }
    
}
