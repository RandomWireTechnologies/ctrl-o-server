<?php

/**
 * app/Controllers/DashboardController.php
 *
 * Resourceful controller for member dashboard.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers;

use CtrlServer\Models\User;
use CtrlServer\Base\Controller;
use CtrlServer\Requests\UpdateProfileRequest;
use CtrlServer\Requests\UpdatePasswordRequest;
use Illuminate\Foundation\Auth\ResetsPasswords;

class DashboardController extends Controller
{
    use ResetsPasswords;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the profile view.
     * 
     * @return Response
     */
    public function profile()
    {
        $user = auth()->user();

        bcs('Edit Profile');

        return view('profile', compact('user'));
    }

    /**
     * Update a user's password.
     * 
     * @param  UpdatePasswordRequest $request
     * @return Response
     */
    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = auth()->user();
        
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        flash('Your password has been reset successfully.', 'success');

        return redirect()->route('app.dashboard');
    }

    /**
     * Update a user's profile.
     * 
     * @param  UpdateProfileRequest $request
     * @return Response
     */
    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = auth()->user();
        
		$user->name            = $request->name;
		$user->phone           = $request->phone;
		$user->address_street  = $request->address_street;
		$user->address_city    = $request->address_city;
		$user->address_state   = $request->address_state;
		$user->address_zipcode = $request->address_zipcode;

        $user->save();

        flash('Your profile has been updated successfully.', 'success');

        return redirect()->route('app.dashboard');
    }
}
