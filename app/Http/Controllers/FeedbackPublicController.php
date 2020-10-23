<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\FeedbackPublic;
use Illuminate\Database\Eloquent\Builder;

class FeedbackPublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbackPublic = FeedbackPublic::paginate(4);
        if($feedbackPublic->isEmpty()){
            return redirect('noFeedback');
        }
        else{

            return view('feedback-view-public')->with(['feedbackPublic' => $feedbackPublic]);
        }
        // $feedbackPublic = DB::table('feedback_publics')->paginate(5);
        // return view('feedback-view-public', ['feedbackPublic' => $feedbackPublic]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback');
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
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $feedbackPublic = new FeedbackPublic;
        $feedbackPublic->name = $request->input('name');
        $feedbackPublic->email = $request->input('email');
        $feedbackPublic->subject = $request->input('subject');
        $feedbackPublic->message = $request->input('message');

        $feedbackPublic->save();

        return redirect('/feedback')->with('success', 'Feedback has been sent!');
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
         $feedbackPublic = FeedbackPublic::find($id);
         $feedbackPublic->delete();

         return redirect('/feedback-view-public')->with('success','Feedback entries deleted successfully');
            
    }

    public function destroy_all()
    {
        FeedbackPublic::truncate();
        return redirect('feedback-management')->with('success','Successfully deleted all feedback entries');
        
    }

    public function sort()
    {
        $feedbackPublic = FeedbackPublic::orderBy('created_at', 'desc')->paginate(4);

        if($feedbackPublic->isEmpty()){
            return redirect('noFeedback');
        }
        else{
            return view('feedback-view-public', ['feedbackPublic' => $feedbackPublic]);
        }
        
        
    }

}