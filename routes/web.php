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

Route::get('/', function () {
    return view('home');
});
Route::get('user/register','AuthController@create');
Route::post('user/register','AuthController@store');
Route::get('/user/login','AuthController@loginForm');
Route::post('/user/login','AuthController@createLogin');
Route::get('/dashboard','AdminController@index');
Route::get('/user/logout','AuthController@logout');


Route::group(['prefix' => 'admin','namespace'=>'Admin','middleware'=>'auth'], function(){
    Route::get('/users', function() {
        return "I am admin";
    });
});
