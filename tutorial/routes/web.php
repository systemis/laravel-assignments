<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\UserController;

Route::get('/trangchu', [PageController::class, "getIndex"]);
Route::get("/register", [RegisterController::class, "render"]);
Route::post("/register", [RegisterController::class, "register"]);

Route::get("/", [PageController::class, "getIndex"]);
Route::get("/type/{id}", [PageController::class, "getProductsWithType"]);
Route::get("/slides", [PageController::class, "getIndex"]);
Route::get("/get-add-to-cart/{id}", [PageController::class, "getAddToCard"])->name("getAddToCart");

Route::get("/login", function () {
  return view("page.login");
});

Route::post("/login", [UserController::class, "login"]);

Route::get("/register", function() {
  return view("page.register");
});

Route::post("/register", [UserController::class, "register"]);
