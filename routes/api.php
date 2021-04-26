<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\loginApiController;
use App\Http\Controllers\auth\logoutApiController;
use App\Http\Controllers\auth\registerApiController;
use App\Http\Controllers\admin\contactsApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contacts', [contactsApiController::class, 'index']);

Route::post('/login', [loginApiController::class, 'login']);

Route::get('/logout', [logoutApiController::class, 'logout']);

Route::post('/register', [registerApiController::class, 'register']);