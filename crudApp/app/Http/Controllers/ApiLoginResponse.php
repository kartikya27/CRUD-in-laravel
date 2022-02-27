<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiProvider;

class ApiLoginResponse extends Controller
{
    function index(Request $req, $auth)
    {   
        $AuthKey =$req->$_POST['key'];
        $AuthSecret =$req->$_POST['secret'];

        header('Content-Type:application/json');
        print_r($auth);

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
        return json_encode($data);
//         return $data;
    }
}
