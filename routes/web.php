<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UploadController;
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

Route::view("upload",'upload');
Route::post("upload",[UploadController::class,'index']);
Route::view("profile",'profile');

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