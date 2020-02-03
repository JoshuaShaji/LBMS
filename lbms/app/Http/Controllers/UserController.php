<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function formSubmit(Request $req)
    {   /*$req->validate([
            'mailid'=>"required|email"
             ]);*/
       //print_r($req->input('searh'));
        // return view('users',['name'=>'peter']);
      // print_r($req->input());
        $req->session()->put('info',$req->input());
        $info=$req->session()->get('info');
        if($info['uname']=='josh')
        {
                return redirect('/');
        }
        else
        {
            return redirect('/reg');
        }

    }
}
