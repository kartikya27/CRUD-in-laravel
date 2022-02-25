<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailAvailable;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});

Route::post('email_check', [EmailAvailable::class,'check']);

Route::get('login', function()
{
    return view('loginForm');
});
Route::post('loginSubmit',[LoginController::class,'login'])->name('LoginPageName');
Route::post('signup',[LoginController::class,'index'])->name('signupPageName');