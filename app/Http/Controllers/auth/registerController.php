<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerController extends Controller
{
    // Return view
    public function index(){
        return view('auth.register');
    }

    // Logic to login the user
    public function register(){
        echo 'Working';
    }
}
