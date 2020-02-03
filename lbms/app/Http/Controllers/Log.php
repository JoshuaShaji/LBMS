<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Illuminate\Support\Facades\DB;


class Log extends Controller
{
   
    function logg(Request $req)
    {
         $pass=DB::table('Login')->where('UserID',$req->uid)->value('Password');
         $pr=DB::table('Login')->where('UserID',$req->uid)->value('Priority');
        
         $req->session()->put('info',$req->input());
         $req->session()->put('role',$pr);
         $info=$req->session()->get('info');
         $role=$req->session()->get('role');
         //print_r($info);
         //print_r($role);

    
        if($pass==$req->pwd)
             if($pr==10)
               return redirect('/student');
               elseif($pr==5)
                 return redirect('/staff'); 
            else
               return redirect('/lib');
          else
             echo "wrong password or username";

            }
     function lout(Request $req)
     {
      $req->session()->flush();
      return redirect('/log');
     }       

}