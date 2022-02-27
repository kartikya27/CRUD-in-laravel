<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiProvider;
use Illuminate\Support\Facades\Hash;

class ApiLoginResponse extends Controller
{
    function index($Authkey,$secret)
    {   
        header('Content-Type:application/json');

        $checkAuth = ApiProvider::where(['key'=>$Authkey])->first();
        $secretAuth = ApiProvider::where(['scret'=>$secret]);
        // $checkAuth || Hash::make($protectedData['secret'],$checkAuth->AuthSecret);
        // if($checkAuth && $secretAuth)
        if($checkAuth || Hash::chechk($secret,$checkAuth->secret))
        {
        $data['Status'] =true;       
        $data['users'] = User::all();
        $data['Result'] = "Success";
        
        }else{
            $data['Result'] = "Not Authorise to Access";
        }
        return json_encode($data);
    }
}
