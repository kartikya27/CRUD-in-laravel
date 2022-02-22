<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailAvailable;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('index');
});

Route::post('email_check', [EmailAvailable::class,'check']);
Route::post('signup',[LoginController::class,'index'])->name('signupPageName');