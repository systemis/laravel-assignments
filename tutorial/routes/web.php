<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SlideController;

Route::get('/trangchu', [PageController::class, "getIndex"]);

Route::group(['prefix' => 'system/admin'], function() {
  Route::get("/", [MainController::class, "getAllStudents"]);
  Route::get("/user1", [MainController::class, "getUser1Profile"]);
  Route::get("/user2", [MainController::class, "getUser2Profile"]);
  Route::get("/user3", [MainController::class, "getUser3Profile"]);
});

Route::get("/register", [RegisterController::class, "render"]);
Route::post("/register", [RegisterController::class, "register"]);

Route::get("/", [PageController::class, "getIndex"]);
Route::get("/type/{id}", [PageController::class, "getProductsWithType"]);
Route::get("/slides", [PageController::class, "getIndex"]);