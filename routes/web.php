<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::post('/profile', 'HomeController@updateProfile');
Route::post('/profile/password', 'HomeController@updatePassword');


Route::get('/cards','CardsController@index');

Route::get('/cards/{card}', 'CardsController@show');
