<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use App\cropDetails;
use App\dataEntry;

class DataController extends Controller
{
   
    public function index()
    {
        // $login = Login::all();
        // return response()->json($login);
        $contacts = cropDetails ::all();
        return view('crop.index', compact('contacts'));
        
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cropDetails');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'variety' => 'required',
            'region' => 'required',
            'district' => 'required',
            'hect' => 'required',
            'sDate' => 'required',
            'seasson' => 'required',
            'province' => 'required',
            'province' => 'required',
            'amount' => 'required',
            'eDate' => 'required',
        ]);

        $game = new cropDetails;
        $game->name = request('name');
        $game->variety = request('variety');
        $game->region = request('region');
        $game->district = request('district');
        $game->hect = request('hect');
        $game->sDate = request('sDate');
        $game->seasson = request('seasson');
        $game->province = request('province');
        $game->amount = request('amount');
        $game->eDate = request('eDate');
        $game->save();
        
        return redirect()->action('DataController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = cropDetails::find($id);
        return view('crop.show',compact('product'));
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
        $contact = cropDetails::find($id);
        $contact->delete();

        return redirect('/crop-data')->with('success', 'Contact deleted!');
    }
}
