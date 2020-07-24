<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Approval;
use App\Farmer;
use App\Province;
use App\District;
use App\Region;
use App\ApprovalData;
use App\CropCategory;
use App\Crop;
use App\Variety;
use App\Harvest;

class ApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $farmer = App\Farmer::where('id', $app->id)->first();
        //             $province = App\Province::where('id', $app->province_id)->first();
        //             $district = App\District::where('id', $app->district_id)->first();
        //             $region = App\Region::where('id', $app->region_id)->first();


        //dd(Farmer::with('lands')->get());

        $approval = Approval::all();
        $farmer = Farmer::all();
        $province = Province::where('id', 1)->first();
        return view('approval', array('farmer' => $farmer, 'province' => $province, 'approval' => $approval));
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
        $approval = Approval::where('id', $request->input('id'))->first();
        //dd($request->input('status'));
        if ($request->input('status') == "approved")
        {
            $approval->status = 1;
            $approval->other = null;
            $approval->inaccurate = false;
            
            $data = ApprovalData::where('approval_id', $approval->id)->first();

            $harvest = new Harvest;

            $harvest->farmer_id = $approval->farmer_id;
            $harvest->province_id = $approval->province_id;
            $harvest->district_id = $approval->district_id;
            $harvest->region_id = $data->region_id;
            $harvest->category_id = $approval->category_id;
            $harvest->crop_id = $data->crop_id;
            $harvest->variety_id = $data->variety_id;
            $harvest->cultivatedLand = $data->cultivatedLand;

            $harvest->save();
        }
        else
        {
            $approval->status = 2;
            if ($request->input('other') == null)
            {
                $approval->inaccurate = true;
                $approval->other = null;
            }
            else
            {
                $approval->inaccurate = false;
                $approval->other = $request->input('other');
            }
        }
        $approval->save();
        return redirect()->action('ApprovalController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ApprovalData::where('approval_id', $id)->first();
        
        $approval = Approval::where('id', $id)->first();
        $farmer = Farmer::where('id', $approval->farmer_id)->first();

        $category = CropCategory::where('id', $data->category_id)->first();
        $crop = Crop::where('id', $data->crop_id)->first();
        $variety = Variety::where('id', $data->variety_id)->first();
        $province = Province::where('id', $data->province_id)->first();
        $district = District::where('id', $data->district_id)->first();
        $region = Region::where('id', $data->region_id)->first();
        return view('approvalDescription', array('approval' => $data, 'farmer' => $farmer, 'province' => $province, 'district' => $district, 'region' => $region, 'category' => $category, 'crop' => $crop, 'variety' => $variety))->with('id', $id);
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
