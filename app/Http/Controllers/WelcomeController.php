<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{


public function index() {
    return 'index';
}
public function aboout() {
    return 'about';
}
public function articles($id) {
    return 'ini artikel ke-' . $id ;
}

    public function hello(){
    return('Hello World');
    }
   public function greeting(){
    return view('blog.hello')
    ->with('name','Andi')
    ->with('occupation','Astronaut');
    }
   }   

