<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    // Return view
    public function index(){
        return view('auth.login');
    }

    // Logic to login the user
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6|max:250',
        ]);

        // Auth
        if(auth()->attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        } else {
            return back()->with('status', 'Invalid Login Details');
        }
    }
}
