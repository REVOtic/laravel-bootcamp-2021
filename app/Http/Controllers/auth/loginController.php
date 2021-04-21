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
    public function login(){
        echo 'Working';
    }
}
