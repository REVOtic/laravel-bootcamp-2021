<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    // Return view
    public function index(){
        return view('admin-pages.dashboard');
    }
}
