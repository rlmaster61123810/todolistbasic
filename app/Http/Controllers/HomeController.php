<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function gmail(){
        return ("http:www.gmail.com") ;
    }
    public function test1(){
        return view('welcome');
    }
    public function greeting($num1,$num2){
        return 'ผลรวมของ'.$num1."และ". $num2. 'คือ'.($num1+$num2);
    }
}
