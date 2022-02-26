<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use App\Models\User;
use App\Models\Mail;
use View;

class MailController extends Controller
{
    function inbox(Request $req)
    {   
        if(Session()->has('user'))
        {
            $email = session()->get('user')['email'];
            $mail = Mail::all()->where('to',$email);
            return view('inbox',['mails'=>$mail,'req'=>$req]);
        }
        else{
            return redirect('login');
            
        }
    }


    function sent(Request $req)
    {
        $email = session()->get('user')['email'];
        $mail = Mail::all()->where('from',$email);
        return view::make('sent',['mails'=>$mail,'req'=>$req]);
    }


    function trash(Request $req)
    {
        $email = session()->get('user')['email'];
        $mail = Mail::all()->where('from',$email);
        return view('trash',['mails'=>$mail,'req'=>$req]);
    }


    function delete(Request $req)
    {
        // delete here
    }

    function sendmail(Request $req)
    {
        $mailObj = new Mail;
        $mailObj->senderName = session()->get('user')['name'];
        $mailObj->from =  session()->get('user')['email'];
        $mailObj->to =  $req->to;
        $mailObj->subject =  $req->subject;
        $mailObj->emailText =  $req->emailText;
        $mailObj->remember_token =  $req->_token;
        // $mailObj->timestamps('created_at');
        $mailObj->save();
    }
}
