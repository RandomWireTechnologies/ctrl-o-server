<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['auth:api']], function() {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});

    Route::get('/cards','CardsController@apiList');
    Route::get('/cards/{card}', 'CardsController@apiRead');

    Route::get('/users', 'AdminController@apiUserList');

    Route::get('/nodes', 'NodesController@apiList');

    Route::get('/schedules', 'SchedulesController@apiList');