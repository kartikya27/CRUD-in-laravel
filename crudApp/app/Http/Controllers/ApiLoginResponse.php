<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApiProvider;
use Illuminate\Support\Facades\Hash;
use DB;

class ApiLoginResponse extends Controller
{
    function index($Authkey,$secret)
    {   
         $key = $Authkey;
         $authSecret = $secret;
        header('Content-Type:application/json');

        
    
        
        $checkAuth = ApiProvider::where(['key'=>$key])->first();
        
        if($checkAuth || ApiProvider::where(['secret'=>$authSecret]))
        {
            $data['Status'] =true;       
            $data['users'] = User::all();
            $data['Result'] = "Success";
        
        }   else{
            $data['Result'] = "Not Authorise to Access";
            }
           
        
        return json_encode($data);
    }
}