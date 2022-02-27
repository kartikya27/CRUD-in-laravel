<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiProvider;

class ApiLoginResponse extends Controller
{
    function index(Request $req)
    {   
        $Auth['key'] =$req->key;
        $Auth['Secret'] =$req->secret;
        return json_encode($Auth);

        exit();
        header('Content-Type:application/json');

        $protectedData = [
            'key' => $AuthKey,
            'secret' => $AuthSecret,
        ];

        $checkAuth = ApiProvider::where(['key'=>$AuthKey])->first();
        $secretAuth = ApiProvider::where(['scret'=>$AuthSecret]);
        if($checkAuth && $secretAuth)
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
