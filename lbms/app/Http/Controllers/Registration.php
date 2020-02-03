<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Login;
use App\student;
use App\Staff;

class Registration extends Controller
{
    function save(Request $req)
    {   
        $req->validate([
            'mail'=>"required|email"
        ]);
        $usr=DB::table('Login')
       ->where('UserID',$req->uid)
        ->value('ID');
        $std=DB::table('students')->where('UserID',$req->uid)->value('ID'); 
        $stf=DB::table('Staff')->where('UserID',$req->uid)->value('ID');     
        $lb=DB::table('Librarian')->where('UserID',$req->uid)->value('ID');    
        if($usr>0)
            echo "already registered";
        else
        {      
            $user= new Login;
            $user->UserID=$req->uid;
            $user->Username=$req->uname;
            $user->Password=$req->pwd;
            $user->Department=$req->dpt;
            $user->PhoneNo=$req->no;
            $user->Email=$req->mail;
            if($std>0)
            {    $user->Priority=10;
                $user->save();
                echo "Registered Succesfully";
            }    
            elseif($stf>0)
            {    $user->Priority=5; 
                $user->save();
                echo "Registered Succesfully";
            }    
            elseif($lb>0)
            {    $user->Priority=2; 
                $user->save();
                echo "Registered Succesfully";
            }    
            else
                echo "invalid user";

            
        }    
    }
}
