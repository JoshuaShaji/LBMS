<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\student;
class Users extends Controller
{
    //
    function checkDb()
    {   /*$user=DB::select('select * from student');
        print_r($user);*/
        //echo "query will be here";
        //$user=DB::table('student')->find(2);
        //$user=DB::table('student')->count();
        $user=DB::table('student')
        /*->insert(['name'=>'antony david']);*/
        //->where('name','antony')->delete();
        ->where('name','antony david')
        ->update(['name'=>'Antony']);
        print_r($user);
    }
    function index()
    {
        $data = student::all();
        print_r($data);
    }
}
