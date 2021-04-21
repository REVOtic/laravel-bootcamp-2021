<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // To show view
    public function index(){
        return view('pages.home');
    }
}
