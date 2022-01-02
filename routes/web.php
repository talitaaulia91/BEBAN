<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\login;

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

// Landing Page
Route::get('/', [home::class, 'home']);
Route::get('/login', [login::class, 'login']);

// Authentication
Route::get('/login', [login::class, "login"])->name('login')->middleware('guest');
Route::post('/login/authenticate', [login::class, "authenticate"]);
Route::get('/logout', [login::class, 'logout']);

// Dashboard
Route::middleware('auth:mahasiswa')->group(function () {
    Route::get('/dashboard',[DashboardController::class,"index"])->name('dashboard');
});