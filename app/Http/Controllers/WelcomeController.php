<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function hello() {
    return 'Hello World';
   } //

public function index() {
    return 'index';
}
public function aboout() {
    return 'about';
}
public function articles($id) {
    return 'ini artikel ke-' . $id ;
}
}