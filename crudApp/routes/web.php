<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailAvailable;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ApiLoginResponse;

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
Route::get('mail/u/{userID}/inbox',[MailController::class,'inbox']);
Route::get('mail/u/{userID}/sent',[MailController::class,'sent']);
Route::get('mail/u/{userID}/trash',[MailController::class,'trash']);
Route::get('mail/u/{userID}/delete',[MailController::class,'delete']);
Route::post('send',[MailController::class,'sendmail']);


Route::get('Api/Response/{Authkey}/{secret}',[ApiLoginResponse::class,'index']);



// Route::get('/Api',function()
// {
//     $AuthToken =rand(1111,99999).csrf_token().uniqid();
//     // return redirect([ApiLoginResponse::class,'index']);
//     return redirect('Api/Response/'.$AuthToken);
// });

// Route::get('Api/Response/{AuthToken}',[ApiLoginResponse::class,'index']);

Route::get('logout', function()
{   
    Session::forget('user');
    return redirect('login');
});

Route::post('loginSubmit',[LoginController::class,'login'])->name('LoginPageName');
Route::post('signup',[LoginController::class,'index'])->name('signupPageName');