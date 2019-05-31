<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $foo1="rahul";
        return view('welcome',[
                    'foo'=>'foobar',
                    'title'=>request('title'),
                    'alert'=>'<script>alert("hello");</script>',
                    'foo1'=>$foo1
                ]);
    }
    public function about(){
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
