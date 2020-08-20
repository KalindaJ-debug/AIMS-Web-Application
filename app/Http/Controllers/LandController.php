<?php

namespace App\Http\Controllers;

use App\Farmer;
use App\Land;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($iid)
    {
        // $id = 31; //farmer id - static - not integrated to view farmer details view
        $id = Land::find($iid);
        //fetch data 
        $farmer = Farmer::where('id', $id)->first(); //farmer name
        $landRecords = Land::with('provinces', 'districts')->where('farmer_id', $id)->paginate(5);
        // $landRecords = $landRecords::with('provinces')->get();
        $count = $landRecords->total(); //number of records

        if($landRecords != null){
            //return land records
        return view('land-records', 
            array(
                'firstName' => $farmer->firstName, 
                'lastName' => $farmer->lastName, 
                'landRecords' => $landRecords, 
                'count' => $count,
                'farmerID' => $id
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
        //Delete all records
        $fid = $request->input('farmerid'); //fetch hidden field data
        DB::table('lands')->where('farmer_id', '=', $fid)->delete();
        return redirect('home'); //display land records page
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
        $land = Land::find($id); //capture farmer_id
        $provincesList = DB::table('provinces')->distinct()->get();
        $districtsList = DB::table('districts')->distinct()->get();

        return view('land-record-update', ['id' => $land->id, 'address' => $land->addressNo, 'street' => $land->streetName, 'lane' => $land->laneName, 'town' => $land->town, 'city' => $land->city, 'gnd' => $land->gnd, 'province' => $land->province_id, 'district' => $land->district_id, 'postalCode' => $land->postalCode, 'planningNumber' => $land->planningNumber, 'landExtend' => $land->landExtend, 'provincesList' => $provincesList, 'districtsList' => $districtsList]);
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
        //update land record
        $land = Land::find($id);

        //update fields
        //input fields - location
        $land->addressNo = $request->input('addressNumber');
        $land->streetName = $request->input('street');
        $land->laneName = $request->input('lane');
        $land->town = $request->input('town');
        $land->city = $request->input('city');
        $land->gnd = $request->input('grama');
        $land->province_id = $request->input('province');
        $land->district_id = $request->input('district');
        $land->postalCode = $request->input('postal');
        $land->planningNumber = $request->input('planNo');

        //land registration - image
        if($request->hasFile('landImage')){
            $image = $request->file('landImage');
            $extension = $image->getClientOriginalExtension(); //img extension
            $landImage = time().'.'.$extension; //name image file
            $image->move('uploads/landRegistration/', $landImage); //move image file to folder
            $land->landRegistration = $landImage; //update db with filename
        } 
        
        //land extent value in ha
        $land->landExtend = $request->input('hectares');

        $land->save();
        return redirect('land-records'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete selected row
        $land = Land::find($id); 
        $land->delete();
        return redirect('land-records'); //display records

    }
}
