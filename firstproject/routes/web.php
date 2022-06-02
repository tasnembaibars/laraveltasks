<?php

use App\Http\Controllers\InfosController;
use App\Http\Controllers\user_control;
use App\Http\Controllers\yieldController;
use App\Models\users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculatorController;


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

Route::get('/', function () {
    return view('task1');
});
Route::get('/about1', function () {
    return view('about1');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/regester',[InfosController::class,'getdata']);
Route::get('/user',[InfosController::class,'getid']);

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home',[yieldController::class,'pass']);
Route::get('/about',[yieldController::class,'passhome']);

Route::get('/calculator',[calculatorController::class,'calculate']);





