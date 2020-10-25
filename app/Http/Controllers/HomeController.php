<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request){

        $searched_term = $request->input('search-bar');

        $pattern_home = '*ome';
        $pattern_farmer = 'f*er';
        $pattern_land = 'l*d';
        $pattern_harvest = 'h*est';
        $pattern_cultivation = 'cu*ion';
        $pattern_crops = 'cr*ps';
        $pattern_feedback = 'f*back';
        $pattern_user = 'u*r';
        $pattern_approval = 'ap*al';
        $pattern_device = 'd*ce';

        $result = "null";

        if(Str::is($pattern_home, $searched_term)){
            $result = "home";
        }
        else if(Str::is($pattern_farmer, $searched_term)){
            $result = "farmer";
        }
        else if(Str::is($pattern_land, $searched_term)){
            $result = "land";
        }
        else if(Str::is($pattern_harvest, $searched_term)){
            $result = "harvest";
        }
        else if(Str::is($pattern_cultivation, $searched_term)){
            $result = "cultivation";
        }
        else if(Str::is($pattern_crops, $searched_term)){
            $result = "crops";
        }
        else if(Str::is($pattern_feedback, $searched_term)){
            $result = "feedback";
        }
        else if(Str::is($pattern_user, $searched_term)){
            $result = "user";
        }
        else if(Str::is($pattern_approval, $searched_term)){
            $result = "approval";
        }
        else if(Str::is($pattern_device, $searched_term)){
            $result = "device";
        }
        else{
            $result = "not found";
        }

        return view('searchResults', ['result' => $result, 'term' => $searched_term]);

    }//end of search function
}
