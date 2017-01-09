<?php

/**
 * app/Controllers/DashboardController.php
 *
 * Resourceful controller for admin dashboard.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Admin;

use Illuminate\Http\Request;
use CtrlServer\Base\Controller;

class DashboardController extends Controller
{
	/**
     * Display the dashboard.
     *
     * @return Response
     */
    public function index()
	{
		return view('admin.dashboard');
	}
}
