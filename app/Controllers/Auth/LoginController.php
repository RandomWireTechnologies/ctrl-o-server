<?php

/**
 * app/Controllers/Auth/LoginController.php
 *
 * Resourceful controller for logins.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Auth;

use CtrlServer\Base\Controller;
use CtrlServer\Controllers\Traits\ActivatesUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    use ActivatesUsers {
        ActivatesUsers::credentials insteadof AuthenticatesUsers;
    }

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
        $this->redirectTo = route('app.dashboard');

        $this->middleware('guest', ['except' => 'logout']);
    }
}
