<?php

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

use Illuminate\Support\Facades\Route;


Route::get('/trang-chu', function () {
    return view('welcome');
});

Route::get('login','LoginController@showFormLogin');
Route::post('login','LoginController@login')->name('login');
