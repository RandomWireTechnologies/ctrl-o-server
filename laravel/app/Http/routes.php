<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::post('ipn', 'PaypalController@ipn');


Route::group(['middleware'=>'auth'], function () {
	Route::get('/home', 'HomeController@index');

	Route::get('cards','CardsController@index');

	Route::get('cards/{card}', 'CardsController@show');

	Route::get('/paypal/subscriptions', 'PaypalController@listSubscriptions');
});

// Route::post('ipn', array('uses' => 'IpnController@store', 'as' => 'ipn'));
