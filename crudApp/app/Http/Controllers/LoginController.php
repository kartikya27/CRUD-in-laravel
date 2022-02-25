<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
    function index(Request $req)
    {   
        $dataResult = new User;
        $dataResult->name = $req->fname." ".$req->lname;
        $dataResult->email =   $req->email."@wrkva.xyz";
        $dataResult->username =  $req->email;
        $dataResult->password =  Hash::make($req->password);
        $dataResult->remember_token =  $req->_token;
        $dataResult->save();

        $passwordOTP = new PasswordReset;
        $passwordOTP->otp = rand(11111,99999);
        $passwordOTP->email = $dataResult->email;
        $passwordOTP->token = $dataResult->remember_token;
        return $passwordOTP->save();

    }

    function login(Request $req)
    {
        $userEmail = User::where(['email'=>$req->email])->first();
        if(!$userEmail || !Hash::check($req->password,$userEmail->password))
        {
            return false;
        }else
        {
            // return true;
            $req->session()->put('user',$userEmail);
            return redirect('mail/u/'.$userEmail->id);

        }
    }
    
}
