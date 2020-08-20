<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\FeedbackPublic;
use App\FeedbackAdmin;
use App\User;

class FeedbackController extends Controller
{
    public function indexPublic()
    {
        // $feedbackPublic = FeedbackPublic::orderBy('created_at','desc')->paginate(5);
        // return view('feedback')->with('feedback', $feedbackPublic);

        $feedbackPublic = DB::table('feedback_publics')->paginate(5);
        return view('feedback-view-public', ['feedbackPublic' => $feedbackPublic]);
    }

    public function indexRegistered()
    {
        // $feedbackPublic = FeedbackPublic::orderBy('created_at','desc')->paginate(5);
        // return view('feedback')->with('feedback', $feedbackPublic);

        $feedbackRegistered = DB::table('feedback_admins')->paginate(5);
        return view('feedback-view', ['feedbackRegistered' => $feedbackRegistered]);
    }



    public function adminAdd(Request $request)
    {
        dd($request->request);
        $feedback = new FeedbackAdmin;

        $feedback->user_id = $request->input('user_id');
        $feedback->description = $request->input('message');

        $feedback->save();

        return redirect()->action('FeedbackController@index');
    }

    //Create
    public function createPublic(){
        return view('feedback');
    }

    //Create
    public function createRegistered(Request $request){

        //$request->session()->put('data', $request->input());

        return view('feedback-registered');
    }

    //Store
    public function storePublic(Request $request){

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


    public function storeRegistered(Request $request){

        $this->validate($request, [
            'message' => 'required'
        ]);

        $feedbackRegistered = new FeedbackAdmin;
        $users = User::where('id', $request->input('id'))->first();

        // $feedbackRegistered->name = $users->name;
        // $feedbackRegistered->email = $users->email;
        $feedbackRegistered->message = $request->input('message');

        $feedbackRegistered->save();

        return redirect('/feedback-registered')->with('success', 'Feedback has been sent!');
    }

    //Show
    public function show($id){

        

        
    }

    //Delete
    public function destroyPublic($id){

        
        $feedbackPublic = FeedbackPublic::find($id);
        $result = $feedbackPublic->delete();
        
        return redirect('feedback-view-public');

    //     $feedbackPublic = FeedbackPublic::find($id);
    //     $feedbackPublic->delete();
    //     return response()->json([
    //     'message' => 'Data deleted successfully!'

    //   ]);

    }


    public function destroyRegistered($id){

        $feedbackRegistered = FeedbackAdmin::find($id);
        $feedbackRegistered->delete();
        return redirect('/feedback-view');
    }


}
