<?php

/**
 * routes/web.php
 *
 * This file is where you may define all of the routes that are handled
 * by your application. Just tell Laravel the URIs it should respond
 * to using a Closure or controller method. Build something great!
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

/*
|--------------------------------------------------------------------------
| Allowed Controller Methods/Routes
|--------------------------------------------------------------------------
|
| When creating resourceful controllers for routing, only the following
| methods should be present in a controller:
|
| __construct, index, show, create, store, edit, update, delete, exists
|
| Any other methods needing to be routed to a controller should be
| absctracted to a trait.
|
*/


/*
|--------------------------------------------------------------------------
| Auth Namespaced Routes
|--------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Auth'], function() {
    Route::get('/', [
        'as'   => 'app.index',
        'uses' => 'LoginController@showLoginForm'
    ]);

    Route::get('/logout', [
        'as'   => 'auth.logout',
        'uses' => 'LoginController@logout'
    ]);

    Route::post('/login', [
        'as'   => 'auth.login.store',
        'uses' => 'LoginController@login'
    ]);

    Route::get('/login', [
        'as'   => 'auth.login.show',
        'uses' => 'LoginController@showLoginForm'
    ]);

    Route::post('/password/email', [
        'as'   => 'auth.forgot.store',
        'uses' => 'ForgotPasswordController@sendResetLinkEmail'
    ]);

    Route::get('/password/reset', [
        'as'   => 'auth.forgot.show',
        'uses' => 'ForgotPasswordController@showLinkRequestForm'
    ]);

    Route::post('/password/reset', [
        'as'   => 'auth.reset.store',
        'uses' => 'ResetPasswordController@reset'
    ]);

    Route::get('/password/reset/{token}', [
        'as'   => 'auth.reset.show',
        'uses' => 'ResetPasswordController@showResetForm'
    ]);

    Route::get('/register', [
        'as'   => 'auth.register.show',
        'uses' => 'RegisterController@showRegistrationForm'
    ]);

    Route::post('/register', [
        'as'   => 'auth.register.store',
        'uses' => 'RegisterController@register'
    ]);

    Route::get('/register/activate/{activationToken}', [
        'as'   => 'auth.register.activate',
        'uses' => 'RegisterController@activate'
    ]);
});


Route::group(['middleware' => ['auth']], function() {

    /*
    |--------------------------------------------------------------------------
    | Admin Namespaced Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['namespace' => 'Admin'], function() {
        Route::get('/admin', [
            'as'   => 'admin.dashboard',
            'uses' => 'DashboardController@index'
        ]);

        Route::get('/admin/cards', [
            'as'   => 'admin.cards.index',
            'uses' => 'CardController@index'
        ]);

        Route::post('/admin/cards', [
            'as'   => 'admin.cards.store',
            'uses' => 'CardController@store'
        ]);

        Route::post('/admin/cards/{id}', [
            'as'   => 'admin.cards.update',
            'uses' => 'CardController@update'
        ]);

        Route::post('/admin/cards/{id}/destroy', [
            'as'   => 'admin.cards.destroy',
            'uses' => 'CardController@destroy'
        ]);

        Route::get('/admin/memberships', [
            'as'   => 'admin.memberships.index',
            'uses' => 'MembershipController@index'
        ]);

        Route::post('/admin/memberships', [
            'as'   => 'admin.memberships.store',
            'uses' => 'MembershipController@store'
        ]);

        Route::post('/admin/memberships/{id}', [
            'as'   => 'admin.memberships.update',
            'uses' => 'MembershipController@update'
        ]);

        Route::post('/admin/memberships/{id}/destroy', [
            'as'   => 'admin.memberships.destroy',
            'uses' => 'MembershipController@destroy'
        ]);

        Route::get('/admin/membership-credits', [
            'as'   => 'admin.membership-credits.index',
            'uses' => 'MembershipCreditController@index'
        ]);

        Route::post('/admin/membership-credits', [
            'as'   => 'admin.membership-credits.store',
            'uses' => 'MembershipCreditController@store'
        ]);

        Route::post('/admin/membership-credits/{id}', [
            'as'   => 'admin.membership-credits.update',
            'uses' => 'MembershipCreditController@update'
        ]);

        Route::post('/admin/membership-credits/{id}/destroy', [
            'as'   => 'admin.membership-credits.destroy',
            'uses' => 'MembershipCreditController@destroy'
        ]);

        Route::get('/admin/membership-subscriptions', [
            'as'   => 'admin.membership-subscriptions.index',
            'uses' => 'MembershipSubscriptionController@index'
        ]);

        Route::post('/admin/membership-subscriptions', [
            'as'   => 'admin.membership-subscriptions.store',
            'uses' => 'MembershipSubscriptionController@store'
        ]);

        Route::post('/admin/membership-subscriptions/{id}', [
            'as'   => 'admin.membership-subscriptions.update',
            'uses' => 'MembershipSubscriptionController@update'
        ]);

        Route::post('/admin/membership-subscriptions/{id}/destroy', [
            'as'   => 'admin.membership-subscriptions.destroy',
            'uses' => 'MembershipSubscriptionController@destroy'
        ]);

        Route::get('/admin/membership-types', [
            'as'   => 'admin.membership-types.index',
            'uses' => 'MembershipTypeController@index'
        ]);

        Route::post('/admin/membership-types', [
            'as'   => 'admin.membership-types.store',
            'uses' => 'MembershipTypeController@store'
        ]);

        Route::post('/admin/membership-types/{id}', [
            'as'   => 'admin.membership-types.update',
            'uses' => 'MembershipTypeController@update'
        ]);

        Route::post('/admin/membership-types/{id}/destroy', [
            'as'   => 'admin.membership-types.destroy',
            'uses' => 'MembershipTypeController@destroy'
        ]);

        Route::get('/admin/nodes', [
            'as'   => 'admin.nodes.index',
            'uses' => 'NodeController@index'
        ]);

        Route::post('/admin/nodes', [
            'as'   => 'admin.nodes.store',
            'uses' => 'NodeController@store'
        ]);

        Route::post('/admin/nodes/{id}', [
            'as'   => 'admin.nodes.update',
            'uses' => 'NodeController@update'
        ]);

        Route::post('/admin/nodes/{id}/destroy', [
            'as'   => 'admin.nodes.destroy',
            'uses' => 'NodeController@destroy'
        ]);

        Route::get('/admin/schedules', [
            'as'   => 'admin.schedules.index',
            'uses' => 'ScheduleController@index'
        ]);

        Route::post('/admin/schedules', [
            'as'   => 'admin.schedules.store',
            'uses' => 'ScheduleController@store'
        ]);

        Route::post('/admin/schedules/{id}', [
            'as'   => 'admin.schedules.update',
            'uses' => 'ScheduleController@update'
        ]);

        Route::post('/admin/schedules/{id}/destroy', [
            'as'   => 'admin.schedules.destroy',
            'uses' => 'ScheduleController@destroy'
        ]);

        Route::get('/admin/users', [
            'as'   => 'admin.users.index',
            'uses' => 'UserController@index'
        ]);

        Route::post('/admin/users', [
            'as'   => 'admin.users.store',
            'uses' => 'UserController@store'
        ]);

        Route::post('/admin/users/{id}', [
            'as'   => 'admin.users.update',
            'uses' => 'UserController@update'
        ]);

        Route::post('/admin/users/{id}/destroy', [
            'as'   => 'admin.users.destroy',
            'uses' => 'UserController@destroy'
        ]);
    });

    Route::get('/dashboard', [
        'as'   => 'app.dashboard',
        'uses' => 'DashboardController@index'
    ]);

    Route::get('/membership', [
        'as'   => 'membership.index',
        'uses' => 'MembershipController@index'
    ]);

    Route::get('/profile', [
        'as'   => 'profile.index',
        'uses' => 'DashboardController@profile'
    ]);
    
    Route::post('/profile', [
        'as'   => 'profile.update',
        'uses' => 'DashboardController@updateProfile'
    ]);

    Route::post('/profile/password', [
        'as'   => 'profile.password',
        'uses' => 'DashboardController@updatePassword'
    ]);

    

    

});
