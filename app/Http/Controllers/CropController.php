<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CropCategory;
use App\Crop;
use App\Variety;

class CropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variety = Variety::all();
        $crop = Crop::all();
        $category = CropCategory::all();
        //dd($variety);
        return view('cropAdmin', array('varieties' => $variety, 'crop' => $crop, 'category' => $category, 'categoryList' => $category, 'cropList' => $crop));
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
            if ($request->input('category') == "Category")
            {
                $category = CropCategory::where('id', $request->input('id'))->first();

                $category->name = $request->input('name');
        
                $category->save();
            }

            if ($request->input('category') == "Crop")
            {
                $crop = Crop::where('id', $request->input('id'))->first();

                $crop->name = $request->input('name');
        
                $crop->save();
            }

            if ($request->input('category') == "Variety")
            {
                $variety = Variety::where('id', $request->input('id'))->first();

                $variety->name = $request->input('name');
        
                $variety->save();
            }
        }
        else if ($request->input('function') == "update")
        {
            if ($request->input('category') == "Crop")
            {
                $crop = Crop::where('id', $request->input('id'))->first();

                $crop->type_id = $request->input('categoryId');
        
                $crop->save();
            }

            if ($request->input('category') == "Variety")
            {
                $variety = Variety::where('id', $request->input('id'))->first();

                $variety->crop_id = $request->input('cropId');
        
                $variety->save();
            }
        }
        else if ($request->input('function') == "add")
        {
            if ($request->input('category') == "Crop")
            {
                $crop = new CropCategory;

                $crop->name = $request->input('name');
        
                $crop->save();
            }
        }

        return redirect()->action('CropController@index');
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
