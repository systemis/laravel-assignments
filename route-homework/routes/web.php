<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SumController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/welcome', [WelcomeController::class, 'xinchao']);


Route::get('/', [WelcomeController::class, 'home'])->name('home'); 

Route::get('sum', function () {
    return view('sum');
});

Route::post('sum', [SumController::class, 'result']);