<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\User;

class DeviceController extends Controller
{
    public function index()
    {
        //dd("Test");
        $device = Device::all();
        $user = User::all();
        return view('deviceAdmin', array('device' => $device, 'userAdd' => $user, 'userEdit' => $user));
    }

    public function addDevice(Request $request)
    {
        $device = new Device;

        $device->user_id = $request->input('userId');

        $device->macAddress = $request->input('address');

        $device->save();

        return redirect()->action('DeviceController@index');
    }

    public function editDevice(Request $request)
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
}
