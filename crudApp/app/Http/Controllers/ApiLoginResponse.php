<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiProvider;
use Illuminate\Support\Facades\Hash;

class ApiLoginResponse extends Controller
{
    function index(Request $req)
    {   
    //    return $data = $req->key;
        // exit();
         $key = $req->key;
         $authSecret = $req->to;
        header('Content-Type:application/json');

        $checkAuth = ApiProvider::where(['key'=>$key])->first();
        if(!empty($checkAuth)){
        
        $secretAuth = Hash::check($authSecret,$checkAuth->secret);
        if($checkAuth && $secretAuth)
        {
            $data['Status'] =true;       
            $data['users'] = User::all();
            $data['Result'] = "Success";
        
        }else{
            $data['Result'] = "Not Authorise to Access";
        }
           
        }else{
            $data['Result'] = "Not Authorise to Access Key";
        }
        return json_encode($data);
    }
}