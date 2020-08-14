<?php

namespace App\Http\Controllers;
use App\Farmer;
use Illuminate\Support\Facades\Hash;

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
        //dd($request->request);
        if ($request->input('type') == "farmer")
        {
            $farmer = new Farmer; 

            $farmer->firstName = $request->input('firstName');
            $farmer->lastName = $request->input('lastName');
            $farmer->otherName = $request->input('otherName');
            $farmer->password = Hash::make($request->input('password'));
            $farmer->telephoneNo = $request->input('telephoneNo');
            $farmer->nic = $request->input('nic');
            $farmer->email = $request->input('email');
    
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $farmer->nicImage = $fileName;
    
            $saved = $farmer->save();
    
            if (!$saved)
            {
                $state = "Failed";
                return redirect()->action('RegistrationController@index')->with('state', $state);
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
            
            $farmer = Farmer::where('email', $request->input('email'))->first();
    
            return redirect('registration/' . $farmer->id . '');
        }
        else if ($request->input('type') == "land")
        {
            // Ama code - store land info
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

        return view('land-registration', array('firstName' => $farmer->firstName, 'lastName' => $farmer->lastName, 'otherName' => $farmer->otherName));
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
