<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    function text() {
        
        return "welcome to our website";
        //
    }
    
    public function view()  {
        
        return view("home");
        
    }
    //
    function pdf()  {
        
        return response()->file(
            public_path('pdf/laravel.pdf'),
            ['content-type'=>'application/pdf']);    
    
    
    }
    function img()  {
        
        return response()->file(
            public_path('img/profile-picture.jpeg'));
               
    
    
    }

}
