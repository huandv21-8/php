<?php

use Illuminate\Support\Facades\Route;

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


// url  này gọi đến cái hàm getdata trong file controller Manage.php
Route::get('/GPT/a/{a}/b/{b}','Manage@getdata');

// Route::get('/', function () {
//     echo 'huandep trai';

//     return view('welcome');

// });
//Route::post('helloworld',)