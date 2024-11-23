<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('signup');
});

Route::get('/signin',[SigninController::class,'show'])->name('signin');
Route::get('/dashboard',[DashboardController::class,'show'])->name('dashboard');
Route::get('/signup',[SignupController::class,'show'])->name('signup');
Route::post('/signup-store',[SignupController::class,'store'])->name('signup-store');
Route::post('/signin-auth', [SigninController::class, 'check'])->name('signin-auth');  // This will handle authentication
Route::get('/logout', [DashboardController::class, 'signout'])->name('logout');
