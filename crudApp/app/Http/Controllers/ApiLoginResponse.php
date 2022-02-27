<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiProvider;

class ApiLoginResponse extends Controller
{
    function index($auth)
    {   
        header('Content-Type:application/json');
        print_r($auth);
        $protectedData = [
            'key' => $auth,
            'secret' => "kartik",
        ];

        $checkAuth = ApiProvider::where(['key'=>$auth])->first();
        $secretAuth = ApiProvider::where(['scret'=>'kartik']);
        if($checkAuth && $secretAuth)
        { 
        $data['Status'] =true;       
        $data['users'] = User::all();
        $data['Result'] = "Success";
        
        }else{
            $data['Result'] = "Not Authorise to Access";
        }
        return json_encode($data);
//         return $data;
    }
}
