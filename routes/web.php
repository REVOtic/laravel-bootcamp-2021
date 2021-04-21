<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\registerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [homeController::class, 'index']);

Route::get('/about', [aboutController::class, 'index']);

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::get('/register', [registerController::class, 'index'])->name('register');

Route::post('/login', [loginController::class, 'login']);
Route::post('/register', [registerController::class, 'register']);