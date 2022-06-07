<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadController;

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
Route::view('user','user')->middleware('protected');
Route::view('home','home');
Route::view('noaccess','noaccess');
// Route::group(['middleware'=>['protected']],function(){
//     Route::view('user','user');
// });

Route::view('upload','upload');
Route::post('upload',[uploadController::class,'index']);

Route::view('profile','profile');
Route::get('/profile/{lang}',function($lang){
   App::setlocale($lang);
   return view('profile');
});
Route::view('trans','trans');
