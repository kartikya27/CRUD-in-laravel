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
Route::post('profileCheck', [EmailAvailable::class,'profileCheck']);

Route::get('login', function()
{
    return view('loginForm');
});
Route::get('mail/u/{userID}', function($userID)
{   
    if(session()->has('user')){
    return view('mail',['userID'=>$userID]);
    }
    else{
        return redirect('login');
    }
});



Route::get('logout', function()
{   
    Session::forget('user');
    return redirect('login');
});

Route::post('loginSubmit',[LoginController::class,'login'])->name('LoginPageName');
Route::post('signup',[LoginController::class,'index'])->name('signupPageName');