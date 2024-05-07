<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Show home template
    public function index(){
        return view('home');
    }
}
