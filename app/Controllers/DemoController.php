<?php

/**
 * app/Controllers/DemoController.php
 *
 * Resourceful controller for theme demo.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers;

use Illuminate\Http\Request;
use CtrlServer\Base\Controller;

class DemoController extends Controller
{
    use Traits\DemoFeaturesTrait, Traits\DemoComponentsTrait;

    public function index()
    {
    	return view('demo.index');
    }
}
