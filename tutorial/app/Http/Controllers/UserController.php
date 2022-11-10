<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request) {
      $login = [
        "email"=>$request->input("email"),
        "password"=>$request->input("password"),
      ];

      if (Auth::attempt($login)) {
        $user = Auth::user();
        Session::put("user", $user);
        return redirect('/trangchu');
        echo `
          <script>
            alert("Login successfully");
            window.location.assign("/");
          </script>
        `;
      } else {
        echo `
          <script>
            alert("Login failed, please check input again!");
          </script>
        `;
      }
    }

    public function register(Request $request) {
      $input = $request->validate([
        "name"=>"required|string",
        "email"=>"required|email|unique:users",
        "password"=>"required",
        "c_password"=>"required|same:password",
      ]);

      $input["password"] = bcrypt($input["password"]);
      User::create($input);

      echo `
        <script>
          alert("Register successfully");
          window.location.assign("Login");
        </script>
      `;
    }
}
