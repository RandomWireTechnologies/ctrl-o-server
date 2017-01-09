<?php

/**
 * routes/api.php
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

use Illuminate\Http\Request;

Route::group(['middleware' => ['auth:api']], function() {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});
Route::group(['middleware' => ['auth']], function() {
    
    Route::get('/admin/cards', [
        'as'   => 'api.cards.list',
        'uses' => 'Admin\CardController@list'
    ]);

    Route::get('/admin/memberships', [
        'as'   => 'api.memberships.list',
        'uses' => 'Admin\MembershipController@list'
    ]);

    Route::get('/admin/membership-credits', [
        'as'   => 'api.membership-credits.list',
        'uses' => 'Admin\MembershipCreditController@list'
    ]);

    Route::get('/admin/membership-subscriptions', [
        'as'   => 'api.membership-subscriptions.list',
        'uses' => 'Admin\MembershipSubscriptionController@list'
    ]);

    Route::get('/admin/membership-types', [
        'as'   => 'api.membership-types.list',
        'uses' => 'Admin\MembershipTypeController@list'
    ]);

    Route::get('/admin/nodes', [
        'as'   => 'api.nodes.list',
        'uses' => 'Admin\NodeController@list'
    ]);

    Route::get('/admin/schedules', [
        'as'   => 'api.schedules.list',
        'uses' => 'Admin\ScheduleController@list'
    ]);

    Route::get('/admin/users', [
        'as'   => 'api.users.list',
        'uses' => 'Admin\UserController@list'
    ]);
});
    