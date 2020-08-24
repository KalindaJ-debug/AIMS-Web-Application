<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $device = Device::all();
        return view('feedback-view-public', array('device' => $device));
    }

    public function addDevice(Request $request)
    {
        dd($request);

        return redirect('feedback-registered');
    }

    public function editDevice(Request $request)
    {
        dd($request);

        return redirect('feedback-registered');
    }

    public function deleteDevice($id)
    {
        dd($id);
    }
}
