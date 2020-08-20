<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\cropDetails;
use App\dataEntry;

class DataController extends Controller
{
    
    public function index()
    {
        // $login = Login::all();
        // return response()->json($login);
        //return view('cropDetails');
        //$cruds = cropDetails::all();  
        $cropDetails = CropDetails::all();

        return view('cropDetails', compact('cropDetails')); 
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = Module::all();
        return view('cropDetails.create', compact('modules'));
        //dd("Works");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    /*
        $game = new cropDetails;
        $game->season = request('season');
        $game->name = request('name');
        $game->variety = request('variety');
        $game->sdate = request('sdate');
        $game->edate = request('edate');
        $game->Province = request('Province');
        $game->district = request('district');
        $game->region = request('region');
        $game->harvest = request('harvest');
        $game->hect = request('hect');
        $game->save();
        
        return redirect()->action('DataController@index');
    */
        $request->validate([
            'season'=> 'required',
            'name' => 'required',
            'variety' => 'required',
            'sdate' => 'required',
            'edate' => 'required',
            'Province' => 'required',
            'district' => 'required',
            'region' => 'required',
            'harvest' => 'required',
            'hect' => 'required',
      ]);

            $crud = new CropDetails;

            $crud->season = $request->get('season');
            $crud->name = $request->get('name');
            $crud->variety = $request->get('variety');
            $crud->sdate = $request->get('sdate');
            $crud->edate = $request->get('edate');
            $crud->Province = $request->get('Province');
            $crud->district = $request->get('district');
            $crud->region = $request->get('region');
            $crud->harvest = $request->get('harvest');
            $crud->hect = $request->get('hect');

            $crud->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('approvalDescription')->with('id', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cropDetails = CropDetails::find($id);
        return view('CropDetails.update',compact('cropDetails'));
    }
   // public function index(){
      //  $cruds = Crud::all();

        //return view('index',compact('cruds'));
    //}
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
    }
}
