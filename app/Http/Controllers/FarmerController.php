<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farmer;
use App\Land;
use App\Province;
use App\District;
use App\LandType;
use Illuminate\Support\Facades\Hash;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmer = Farmer::all();
        $land = Land::all();
        $province = Province::all();
        $district = District::all();
        $landType = LandType::all();

        return view('farmerManagement', array('farmer' => $farmer, 'land' => $land, 'province' => $province, 'district' => $district, 'landType' => $landType));
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
        //dd($request->request);
        if ($request->input('function') == "edit")
        {
            $request->validate([
                'email' => 'unique:farmers,email|email:rfc,dns',
                'username' => 'required|unique:farmers,userName'
            ]);

            $farmer = Farmer::where('id', $request->input('id'))->first();

            $farmer->firstName = $request->input('firstName');
            $farmer->lastName = $request->input('lastName');
            $farmer->otherName = $request->input('otherName');
            $farmer->email = $request->input('email');
            $farmer->telephoneNo = $request->input('telephoneNo');
            $farmer->nic = $request->input('nic');
            $farmer->userName = $request->input('username');
        
            $farmer->save();
        }
        else if ($request->input('function') == "land")
        {   
            // $request->input('id');
            // return redirect('land/' . $request->input('id') . '');
            return redirect()->action('LandController@show', $request->input('id'));
            //return redirect('land-records/' . $request->input('id') . '');
        }
        else if ($request->input('function') == "add")
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
    
            if ($request->has('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $farmer->nicImage = $fileName;
            }
            
            $saved = $farmer->save();
        }
        else if ($request->input('function') == "delete")
        {
            $farmer = Farmer::where('id', $request->input('id'))->first();
        
            $farmer->delete();
        }

        return redirect()->action('FarmerController@index');
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
