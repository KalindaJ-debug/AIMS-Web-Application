<?php

namespace App\Http\Controllers;

use App\cultivation;
use App\Farmer;
use App\harvests;
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
        // load land records view list
    //    
    
        
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
        return redirect('land-records/'. $fid . '');
        // return redirect('home'); //display land records page
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
        $lid = Land::find($id);
        //fetch data 
        $farmer = Farmer::where('id', $id)->first(); //farmer name
        $landRecords = Land::with('cultivation','harvests','land_type','provinces', 'districts')->where('farmer_id', $id)->paginate(5);
        $cultivationRecords = cultivation::with('lands')->distinct()->get();
        $harvestRecords = harvests::with('lands')->distinct()->get();
        $count = $landRecords->total(); //number of records

        if($landRecords != null && $count > 0){
            //return land records
        return view('land-records', 
            array(
                'firstName' => $farmer->firstName, 
                'lastName' => $farmer->lastName, 
                'landRecords' => $landRecords, 
                'count' => $count,
                'farmerID' => $id,
                'cultivationRecords' => $cultivationRecords,
                'harvestRecords' => $harvestRecords
            )
        ); //view land records

        } //end of if
        else{
            return view('land-records-empty');
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // dd($request->input('landId'));
        //
        $id = $request->input('landId');
        $land = Land::find($id); //capture farmer_id
        $provincesList = DB::table('provinces')->distinct()->get();
        $districtsList = DB::table('districts')->distinct()->get();
        $landTypeList = DB::table('land_type')->distinct()->get();
        $regionsList = DB::table('regions')->distinct()->get();

        return view('land-record-update', ['id' => $land->id, 'address' => $land->addressNo, 'street' => $land->streetName, 'lane' => $land->laneName, 'town' => $land->town, 'landType' => $land->land_type_id, 'region' => $land->region_id, 'province' => $land->province_id, 'district' => $land->district_id, 'postalCode' => $land->postalCode, 'planningNumber' => $land->planningNumber, 'landExtend' => $land->landExtend, 'provincesList' => $provincesList, 'districtsList' => $districtsList, 'landTypeList' => $landTypeList, 'regionsList' => $regionsList]);
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
       //Code to validate form input
            $request->validate([
                
                'addressNumber' => ['required', 'between:1,10'],
                'street' => ['nullable', 'max:50'],
                'lane' => ['required', 'string' ,'max:100'],
                'town' => ['nullable', 'max:50'],
                'landType' => ['required'],
                'region' => ['required'],
                'district' => ['required'],
                'province' => ['required'],
                'postal' => ['required', 'numeric', 'digits:5'],
                'planNo' => ['required', 'numeric', 'digits:8'],
                'hectares' => ['required', 'numeric']

            ]); //end of validations

        //update land record
        $land = Land::find($id);

        if($land != null){
            //update fields
        //input fields - location
        $land->addressNo = $request->input('addressNumber');
        $land->streetName = $request->input('street');
        $land->laneName = $request->input('lane');
        $land->town = $request->input('town');
        $land->land_type_id = $request->input('landType');
        $land->region_id = $request->input('region');
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

        $fid = $land->farmer_id; //fetch farmer id

        $land->save();

        return redirect('land-records/'. $fid . ''); //display farmer records - show
        }
        else {

            return redirect('home'); //error
        }
        
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
        $farmerId = $land->farmer_id; //store farmer id
        $land->delete(); //delete record
        return redirect('land-records/'. $farmerId . ''); //display farmer records - show

    }
}
