<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
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

Route::post("users",[UserController::class,'getData']);
Route::view("login",'users');
Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('profile');
});

Route::view("upload",'upload');
Route::post("upload",[UploadController::class,'index']);


//Route::get("user",[UserAuth::class,'userLogin']);
//Route::view("login",'login');


/*Route::get('/login', function () {
  if(session()->has('user'))
    {
        return redirect('profile');
    }
    return  redirect('login');
});

Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});
*/