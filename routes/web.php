<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [RegistrationController::class,'index'])->name('main');

Route::post('/register',[RegistrationController::class,'register'])->name("register");

Route::get('/login', [LoginController::class,'index'])->name('loginpage');

Route::post('/login',[LoginController::class,'login'])->name("login");

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth')->name("dashboard");