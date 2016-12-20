<?php

/**
 * app/Controllers/Auth/RegisterController.php
 *
 * Resourceful controller for registrations.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Auth;

use Validator;
use CtrlServer\Models\User;
use Illuminate\Http\Request;
use CtrlServer\Base\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'            => 'required|max:255',
            'email'           => 'required|email|max:255|unique:users',
            'password'        => 'required|min:6|confirmed',
            'phone'           => 'required|regex:/[0-9]{3}-?[0-9]{3}-?[0-9]{4}/|max:20',
            'address_street'  => 'required|max:128',
            'address_city'    => 'required|max:64',
            'address_state'   => 'required|min:2|max:2',
            'address_zipcode' => 'required|regex:/[0-9]{5}-?[0-9]*/|max:10',
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $this->create($request->all());

        flash('Please check your email for a link to activate your account.');

        return redirect()->route('auth.login.show');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'            => $data['name'],
            'email'           => $data['email'],
            'password'        => bcrypt($data['password']),
            'company'         => $data['company'],
            'phone'           => $data['phone'],
            'address_street'  => $data['address_street'],
            'address_unit'    => $data['address_unit'],
            'address_city'    => $data['address_city'],
            'address_state'   => $data['address_state'],
            'address_zipcode' => $data['address_zipcode']
        ]);
    }

    /**
     * Activate the user via the email link.
     * 
     * @param  string $activationToken
     * @return Response  
     */
    public function activate($activationToken) : RedirectResponse
    {
        $user = User::where('activation_token', $activationToken)->first();

        if (! $user) {
            $message  = "Your account has either already been activated, or ";
            $message .= "there is a typo in your activation token.";
            
            flash($message, 'danger');

            return redirect()->route('auth.login.show');
        }

        $user->activate();

        flash('Thank you for activating your account.', 'success');

        return redirect()->route('auth.login.show');
    }
}
