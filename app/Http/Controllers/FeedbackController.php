<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $userID = 1;
        $name = "Test User";
        $email = "testUser@gmail.com"; 
        return view('feedback-registered', array('userID' => $userID, 'name' => $name, 'email' => $email));
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
}
