<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use App\Models\User;
use App\Models\Mail;

class MailController extends Controller
{
    function inbox($userID)
    {   
        if(Session()->has('user'))
        {
            $email = session()->get('user')['email'];
            $mail = Mail::all()->where('from',$email);
            return view('list',['mails'=>$mail]);
        }
        else{
            return redirect('login');
            
        }
    }
}
