<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class registerApiController extends Controller
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
            'password' => 'required|min:6|max:250',
        ]);

        // Get user from email
        $user = User::where('email', $request->email)->first();

        if(empty($user)){
            $user_id = User::create([
                // column values
                'name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ])->id;

            return response()->json([
                'data' => array(),
                "message" => "User Registered!",
                "error" => array()
            ], 200);
        }

        return response()->json([
            'data' => array(),
            "message" => "",
            "error" => array("User Registration Failed!")
        ], 400);
    }
}
