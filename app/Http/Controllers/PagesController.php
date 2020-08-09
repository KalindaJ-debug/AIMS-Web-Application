<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //page routing

    public function index(){
        return view('index');
    }

    public function admindash(){
        return view('admindashboard');
    }

    public function adminharvest(){
        return view('adminharvest');
    }

    public function contact(){
        return view('contactus');
    }

    public function map(){
        return view('map');
    }

}
