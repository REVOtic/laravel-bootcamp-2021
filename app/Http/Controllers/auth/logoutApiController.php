<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class logoutApiController extends Controller
{
    public function __construct(){
        $this->middleware(['auth:api']);
    }

    public function logout(){
        Auth::user()->tokens->each(function($token, $key) {
            $token->delete();
        });
    }
}
