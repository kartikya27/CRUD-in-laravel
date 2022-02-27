<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiProvider;

class ApiLoginResponse extends Controller
{
    function index(Request $req,$Authkey,$secret)
    {   
        $protectedData['key'] =$Authkey;
        $protectedData['secret'] =$secret;
        // return json_encode($Auth);
        header('Content-Type:application/json');

        $checkAuth = ApiProvider::where(['key'=>$protectedData['key']])->first();
        $secretAuth = ApiProvider::where(['scret'=>$protectedData['secret']]);
        // $checkAuth || Hash::make($protectedData['secret'],$checkAuth->AuthSecret);
        if($checkAuth && $secretAuth)
        // if($checkAuth || Hash::make($protectedData['secret'],$checkAuth->AuthSecret))
        { 
        $data['Status'] =true;       
        $data['users'] = User::all();
        $data['Result'] = "Success";
        
        }else{
            $data['Result'] = "Not Authorise to Access";
        }
        // return json_encode($data);
    }
}
