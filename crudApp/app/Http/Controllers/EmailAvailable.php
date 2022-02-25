<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// use DB;

class EmailAvailable extends Controller
{
    function check(Request $request)
    {
     if($request->post('email'))
     {
      $email = $request->email;
      $data = User::where('username', $email)
      ->count();    
      if($data > 0)
      {
       return 'not_unique';
      }
      else
      {
        return 'unique';
      }
     }
    }

    function profileCheck(Request $request)
    {
        if($request->post('email'))
        {
         $email = $request->email;
         $data = User::where('username', $email);    
         if(!empty($data->username))
         {
          return 'found';
         }
         else
         {
           return 'img not found';
         }
        }
    }
}
