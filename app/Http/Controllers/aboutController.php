<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    // To show view
    public function index(){
        return view('pages.about');
    }
}
