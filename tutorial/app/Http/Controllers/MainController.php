<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    private $studentList;

    public function __construct() {
      $this -> studentList = [
        [
          "name" => "Nguyen Van A",
          "age" => 2,
          "address" => "vietname",
        ],
        [
          "name" => "Nguyen Van B",
          "age" => 2,
          "address" => "vietname",
        ],
        [
          "name" => "Nguyen Van C",
          "age" => 2,
          "address" => "vietname",
        ],
      ];
    }

    function getUser1Profile() {
      $title = "user1 profile";
      $info = ['name' => 'user1', 'age' => 12, 'address' => 'VietNam'];
      return view("user-profile")->with('title', $title)->with('info', $info);
    }
    function getUser2Profile() {
      $title = "user2 profile";
      $info = ['name' => 'user2', 'age' => 12, 'address' => 'VietNam'];
      return view("user-profile")->with('title', $title)->with('info', $info);
    }
    function getUser3Profile() {
      $title = "user3 profile";
      $info = ['name' => 'user3', 'age' => 12, 'address' => 'VietNam'];
      return view("user-profile")->with('title', $title)->with('info', $info);
    }
    function getAllStudents() {
      return view("user-managment")->with("students", $this->studentList);
    }
}
