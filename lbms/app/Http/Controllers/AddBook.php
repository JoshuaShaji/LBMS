<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
class AddBook extends Controller
{
    
    
    function add(Request $req)
    {   
       
           
            $user= new book;
            $user->isbn_no=$req->isbn;
            $user->book_code=$req->bcd;
            
            
                $user->save();
                echo "Successfully added !!";
            

            
    }    
}
