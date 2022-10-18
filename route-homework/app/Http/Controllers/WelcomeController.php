<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function xinchao() {
        return view('welcome');
    }

    public function home() { 
        // Your logic here 
        return view('home'); 
    } 
}
