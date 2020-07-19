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

Route::get('/', "HomeController@index");
Route::get('/create', "HomeController@create");
Route::get('/about', "HomeController@about");
//Route::get('/show', "HomeController@show");
//Route::get('/create', "HomeController@create");
// Route::get('/', "HomeController@store");
// Route::get('/', "HomeController@update");
// Route::get('/', "HomeController@delete");

