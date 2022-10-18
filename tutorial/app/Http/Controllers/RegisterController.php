<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    function register(RegisterRequest $request) {
      $user = [
        'first_name' => $first_name = $request -> input('fist_name'),
        'last_name' => $last_name = $request -> input('last_name'),
        'email' => $email = $request -> input('email'),
      ];

      return view('register')->with('user', $user);
    }

    function render() {
      return view("register");
    }
}
