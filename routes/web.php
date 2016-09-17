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

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');
    Route::get('/profile', 'HomeController@profile');
    Route::post('/profile', 'HomeController@updateProfile');
    Route::post('/profile/password', 'HomeController@updatePassword');

    Route::get('/membership', 'MembershipController@index');
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/new', 'AdminController@newUser');
    Route::get('/admin/register', 'AdminController@register');
    Route::post('/admin/new', 'AdminController@newUser');
    Route::post('/admin/register', 'AdminController@register');


    Route::get('/cards','CardsController@index');

    Route::get('/cards/{card}', 'CardsController@show');

});