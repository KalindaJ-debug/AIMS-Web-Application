<?php

namespace App\Http\Controllers;

use App\Harvest;
use App\cultivation;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class HarvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cultivation = cultivation::all();
        return view('harvest.harvest',compact('cultivation'));
    }

    /**
     * Get a validator for an incoming request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'harvestedLand' => ['required', 'double'],
            'harvestedAmount' => ['required', 'double'],
            'harvestedDate' => ['required', 'date'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return cultivation::create([
            'harvestedLand' => $data['harvestedLand'],
            'harvestedAmount' => $data['harvestedAmount'],
            'harvestedDate' => $data['harvestedDate'],
            'cultivation_id' => $data['cultivation_id'],
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $harvest = $this->create($request->all());

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function show(Harvest $harvest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function edit(Harvest $harvest)
    {
        $harvest = Harvest::find($id);
        return view('harvest.harvestedit',compact('harvest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $harvest = Harvest::find($id);

        $this->validator($request->all())->validate();

        $harvest->harvestedDate = $request->get('harvestedDate');
        $harvest->harvestedLand = $request->get('harvestedLand');
        $harvest->harvestedAmount = $request->get('harvestedAmount');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Harvest  $harvest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Harvest $harvest)
    {
        $harvest = Harvest::find($id);
        $harvest->delete();

        return redirect('home');
    }
}
