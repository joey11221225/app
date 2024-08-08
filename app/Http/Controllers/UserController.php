<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'email'=>['required',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6'
        ]);

        User::create($formFields);
        return redirect('/login')->with('message','User created and Logged in');
    
    }
}
