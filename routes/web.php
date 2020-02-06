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


Route::get('/home', function () {
    return view('admin.dashboard');
})->middleware('checkLogin');

Route::get('login','LoginController@showFormLogin');
Route::get('logout', 'LoginController@logout')->name('logout');//đặt tên cho logout
Route::post('login','LoginController@login')->name('login');
Route::middleware('checkLogin')->prefix('users')->group(function (){
    Route::get('/','UserController@index')->name('users.index');
});

