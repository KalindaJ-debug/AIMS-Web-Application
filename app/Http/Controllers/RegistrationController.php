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
                'email' => 'required|unique:farmers,email|email:rfc,dns',
            ]);

            $farmer = new Farmer; 

            $farmer->firstName = $request->input('firstName');
            $farmer->lastName = $request->input('lastName');
            $farmer->otherName = $request->input('otherName');
            $farmer->password = Hash::make($request->input('password'));
            $farmer->telephoneNo = $request->input('telephoneNo');
            $farmer->nic = $request->input('nic');
            $farmer->email = $request->input('email');
                
            $pubEmail = $request->input('email'); //public email

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $farmer->nicImage = $fileName;
        
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
        else if ($request->input('type') == "land")
        {
            // Ama code - store land info
            $land = new Land; //model obj
        
            //farmer_id = name match
            $latestRecord = DB::table('farmers')->latest('updated_at')->first();
            $land->farmer_id = $latestRecord->id; //farmer id
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
            } else {
                return $request;
                $land->landRegistration = 'unavailable'; //store empty field
            }
            
            //land extent value in ha
            $land->landExtend = $request->input('hectares');

            //save land details
            $success = $land->save();
            $error = null;

            if(!$success){
                $error = "Land Registration Failed";
                return redirect()->action('RegistrationController@index')->with('state', $error); //redirect to land registration page
            }

            $farmid = $latestRecord->id;
            //success redirection
            // return redirect('land-form-success')->with('farmid',$farmid);
            // return redirect()->route('land-form-success', ['farmid'=> $farmid]); //farmer record array
            return redirect('land-form-success/' . $latestRecord->id . '');
            
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

        return view('land-registration', array('firstName' => $farmer->firstName, 'lastName' => $farmer->lastName, 'otherName' => $farmer->otherName, 'provincesList'=> $provincesList, 'districtsList'=>$districtsList));
         
       
    
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
