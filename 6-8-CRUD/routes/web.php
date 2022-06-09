<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


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
    return view('welcome');
});

Route::view('/view','view');
Route::get('/view/{id}',[MovieController::class,'view']);
Route::get('/list',[MovieController::class,'show']);
Route::get('/delete/{id}',[MovieController::class,'delete']);

Route::view('/add','add');
Route::post('/add',[MovieController::class,'add']);
Route::view('/update','update');
Route::get('/update/{id}',[MovieController::class,'edit']);
Route::post('/update',[MovieController::class,'editdata']);