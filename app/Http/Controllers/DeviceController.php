<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\User;
use App\Farmer;

class DeviceController extends Controller
{
    public function index()
    {
        //dd("Test");
        $deviceUser = Device::select('id', 'user_id', 'macAddress')->where('farmer_id', null)->get();
        $deviceFarmer = Device::select('id', 'farmer_id', 'macAddress')->where('user_id', null)->get();
        //dd($deviceFarmer[0]->farmer);
        $user = User::select('id', 'name', 'lastname')->get();
        $farmer = Farmer::select('id', 'firstName', 'lastName')->get();
        return view('deviceAdmin', array('deviceUser' => $deviceUser, 'userAdd' => $user, 'userEdit' => $user, 'deviceFarmer' => $deviceFarmer, 'farmerAdd' => $farmer, 'farmerEdit' => $farmer));
    }

    public function addUserDevice(Request $request)
    {
        $device = new Device;

        $device->user_id = $request->input('userId');

        $device->macAddress = $request->input('address');

        $device->save();

        return redirect()->action('DeviceController@index');
    }

    public function editUserDevice(Request $request)
    {
        $device = Device::where('id', $request->input('id'))->first();

        $device->user_id = $request->input('userId');

        $device->macAddress = $request->input('address');

        $device->save();

        return redirect()->action('DeviceController@index');
    }

    public function deleteDevice(Request $request)
    {
        $device = Device::where('id', $request->input('id'))->first();
        
        $device->delete();

        return redirect()->action('DeviceController@index');
    }

    public function addFarmerDevice(Request $request)
    {
        $device = new Device;

        $device->farmer_id = $request->input('farmerId');

        $device->macAddress = $request->input('address');

        $device->save();

        return redirect()->action('DeviceController@index');
    }

    public function editFarmerDevice(Request $request)
    {
        $device = Device::where('id', $request->input('id'))->first();

        $device->farmer_id = $request->input('farmerId');

        $device->macAddress = $request->input('address');

        $device->save();

        return redirect()->action('DeviceController@index');
    }

    public function addFarmerManagement(Request $request)
    {
        $device = new Device;

        $device->farmer_id = $request->input('farmerId');

        $device->macAddress = $request->input('address');

        $device->save();

        return redirect()->action('FarmerController@index');
    }

    public function editFarmerManagement(Request $request)
    {
        $device = Device::where('id', $request->input('deviceId'))->first();

        $device->farmer_id = $request->input('farmerId');

        $device->macAddress = $request->input('address');

        $device->save();

        return redirect()->action('FarmerController@index');
    }
}
