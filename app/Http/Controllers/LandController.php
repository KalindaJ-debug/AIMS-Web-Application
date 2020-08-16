<?php

namespace App\Http\Controllers;

use App\Farmer;
use App\Land;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = 31; //farmer id

        //fetch data 
        $farmer = Farmer::where('id', $id)->first(); //farmer name
        $landRecords = Land::with('provinces', 'districts')->where('farmer_id', $id)->get();
        // $landRecords = $landRecords::with('provinces')->get();
        $count = $landRecords->count(); //number of records

        if($landRecords != null){
            //return land records
        return view('land-records', 
            array(
                'firstName' => $farmer->firstName, 
                'lastName' => $farmer->lastName, 
                'landRecords' => $landRecords, 
                'count' => $count
            )
        ); //view land records

        } //end of if
        else{
            return view('home');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
