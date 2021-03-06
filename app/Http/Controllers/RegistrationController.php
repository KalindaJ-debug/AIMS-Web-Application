<?php

namespace App\Http\Controllers;
use App\Farmer;
use App\Land;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        // $login = Login::all();
        // return response()->json($login);
        return view('farmerRegistration');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd("Works");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pubEmail = '';

        //dd($request->request);
        if ($request->input('type') == "farmer")
        {            
            $request->validate([
                'email' => 'unique:farmers,email|email:rfc,dns',
                'username' => 'required|unique:farmers,userName'
            ]);

            $farmer = new Farmer; 

            $farmer->firstName = $request->input('firstName');
            $farmer->lastName = $request->input('lastName');
            $farmer->otherName = $request->input('otherName');
            $farmer->password = Hash::make($request->input('password'));
            $farmer->telephoneNo = $request->input('telephoneNo');
            $farmer->nic = $request->input('nic');
            $farmer->email = $request->input('email');
            $farmer->userName = $request->input('username');    

            $pubEmail = $request->input('email'); //public email

            if ($request->has('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $farmer->nicImage = $fileName;
            }
            
            $saved = $farmer->save();
        
            if (!$saved)
            {
                $state = "Failed";
                dd("Test123");
                return redirect()->action('RegistrationController@index');
            }
        
            // //dd($request->hasfile('image'));
            // if ($request->hasfile('image'))
            // {
            //     $file = $request->file('image');
            //     $extension = $file->getClientOriginalExtension();
            //     $fileName = time() . '.' . $extension;
            //     $farmer->nicImage = $fileName;
            
            //     $farmer->save();
            // } 
            //$ffid = $farmer->id;

            return redirect('registration/' . $farmer->id . '');

        }
        else if ($request->input('type') == "land") //Land Module - 20205283
        {
            //Code to validate form input
            $request->validate([
                'fid' => ['required'],
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

            //store land info
            $land = new Land; //model obj
            
            //farmer_id = name match
            // $latestRecord = DB::table('farmers')->latest('updated_at')->first();
            $farId = $request->input('fid');
            $latestRecord = DB::table('farmers')->distinct()->where('id', $farId)->first();
            
            // dd($latestRecord);

            $land->farmer_id = $latestRecord->id; //farmer id

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
            } else {
                return $request;
                $land->landRegistration = 'unavailable'; //store empty field
            }
            
            //land extent value in ha
            $land->landExtend = $request->input('hectares');

            //save land details
            $land->save();

            // if($land->id == null){
            //     $error = "Land Registration Failed";
            //     return redirect()->action('RegistrationController@index')->with('state', $error); //redirect to land registration page
            // }
           
            // $farmid = $latestRecord->id;
               
            return redirect('land-form-success/' . $latestRecord->id . ''); //success redirection
            
            
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $farmer = Farmer::where('id', $id)->first(); 
        $provincesList = DB::table('provinces')->distinct()->get();
        $districtsList = DB::table('districts')->distinct()->get();
        $landTypeList = DB::table('land_type')->distinct()->get();
        $regionsList = DB::table('regions')->distinct()->get();

        return view('land-registration', array('firstName' => $farmer->firstName, 'lastName' => $farmer->lastName, 'otherName' => $farmer->otherName, 'provincesList'=> $provincesList, 'districtsList'=>$districtsList, 'landTypeList' => $landTypeList, 'regionsList' => $regionsList));
         
       
    
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

    // public function landIndex(Request $request, $id){

    //     if(session('error')!=null){
    //         $fid = $request->session()->get('error');
    //     }

    //     $farmer = Farmer::where('id', $fid)->first();

    //     return view('land-registration', array('firstName' => $farmer->firstName,lastName' => $farmer->lastName, 'otherName' => $farmer->otherName));
    // }
}
