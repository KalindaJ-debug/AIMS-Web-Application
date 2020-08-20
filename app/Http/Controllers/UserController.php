<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('verified');
        $users = User::all();

        //dd($users['0']);

        return view('auth.users',compact('users'));
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
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        $response = Password::broker()->sendResetLink(['email'=>$users->email]);

        if($response == Password::RESET_LINK_SENT){

            return redirect('/adminuser')->with('success', 'Email Sent');

        } else {
            return redirect('/adminuser')->with('error', 'There was an error sending the email');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('auth.edit', compact('users')); 
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
        $users = User::find($id);
        $password = $request->input('password');

        if(empty($password)){
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string'],
                'username' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255',Rule::unique('users')->ignore($users->id)],
                'role' => ['required'],
            ]);
    
            $users->name = $request->get('name');
            $users->lastname = $request->get('lastname');
            $users->email = $request->get('email');
            $users->role = $request->get('role');
    
            $users->save();
    
            return redirect('/adminuser')->with('success', 'User updated');
        }else{
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string'],
                'username' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255',Rule::unique('users')->ignore($users->id)],
                'role' => ['required'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
    
            $users->name = $request->get('name');
            $users->lastname = $request->get('lastname');
            $users->email = $request->get('email');
            $users->role = $request->get('role');
            $users->password = Hash::make($request->get('password'));
    
            $users->save();
    
            return redirect('/adminuser')->with('success', 'User updated');
        }        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('/adminuser')->with('success', 'user deleted!');
    }
}
