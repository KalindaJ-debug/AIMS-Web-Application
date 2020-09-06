<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\FeedbackRegistered;
use App\User;
use Illuminate\Database\Eloquent\Builder;

class FeedbackRegisteredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbackReg = FeedbackRegistered::all();
        if($feedbackReg->isEmpty()){
            return view('noFeedback');
        
        }
        else{
            return view('feedback-view', ['feedbackReg' => $feedbackReg]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback-registered');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'subjectR' => 'required',
            'message' => 'required'
        ]);

        // if($request->input('inquiry_type') == 'Data Approval failure'){
        //     $feedbackReg->inquiry_type = 'Data Approval failure';

        // }

        $feedbackReg = new FeedbackRegistered;
        
        $feedbackReg->user_name = $request->input('name');
        $feedbackReg->user_email = $request->input('email');
        $feedbackReg->subject = $request->input('subjectR');
        $feedbackReg->message = $request->input('message');

        $feedbackReg->save();
        return redirect('/feedback-registered')->with('success', 'Feedback has been sent!');
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
        $feedbackReg = FeedbackRegistered::find($id);
        $feedbackReg->delete();

        //return redirect('feedback-view');

        $feedbackAll = FeedbackRegistered::all();
         if($feedbackAll->isEmpty()){
            return view('noFeedback');
        }
        else{
            return redirect('feedback-view');
        }
    }

    public function destroy_all()
    {
        FeedbackRegistered::truncate();
        return redirect('feedback-management');
    }
}
