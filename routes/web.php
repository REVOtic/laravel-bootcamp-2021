<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\auth\loginController;
use App\Http\Controllers\auth\logoutController;
use App\Http\Controllers\auth\registerController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\contactsController;

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

Route::get('/', [homeController::class, 'index'])->name('home');

Route::get('/about', [aboutController::class, 'index']);

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::get('/register', [registerController::class, 'index'])->name('register');

Route::post('/login', [loginController::class, 'login']);
Route::post('/register', [registerController::class, 'register']);

Route::get('/logout', [logoutController::class, 'logout'])->name('logout');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/view-contacts', [contactsController::class, 'index'])->name('viewContacts');

Route::get('/dashboard/contact', [contactsController::class, 'create'])->name('addContact');
Route::post('/dashboard/contact', [contactsController::class, 'store']);
Route::put('/dashboard/contact/{contacts}', [contactsController::class, 'update'])->name('editContact');
Route::delete('/dashboard/contact/{contacts}', [contactsController::class, 'destroy'])->name('deleteContact');