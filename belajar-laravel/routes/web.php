<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ManagementUserController;

use App\Http\Controllers\HomeController;

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



Route::resource('/user','ManagementUserController');

// Route::get('/home',[HomeController::class,"index"]); error
Route::get('/home', function () {
    return view('layouts.home');
});
// Route::group(['namespace' => 'Frontend'], function()
//             {
//                 Route::resource('home', 'HomeController');
//             });

//Route::get('/', function(){
//    return view('');
//});
