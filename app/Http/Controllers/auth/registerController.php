<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    // Return view
    public function index(){
        return view('auth.register');
    }

    // Logic to login the user
    public function register(Request $request){
        $this->validate($request, [
            'full_name' => 'required|min:5|max:250',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'password' => 'required|confirmed|min:6|max:250',
        ]);

        $user_id = User::create([
            // column values
            'name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ])->id;

        if(auth()->attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard');
        } else {
            return back()->with('status', 'Invalid Login Details');
        }

        if(!empty($user_id)){
            return redirect()->route('dashboard');
        } else {
            return back()->with('status', 'Registration failed');
        }
    }
}
