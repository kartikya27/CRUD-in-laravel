<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apiuser;
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
        
        // $dataResult->name = $req->name;
        return $dataResult->save();
    }
    
}
