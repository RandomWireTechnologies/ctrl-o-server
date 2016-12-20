<?php

/**
 * app/Controllers/AdminController.php
 *
 * Resourceful controller for admin dashboard.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers;

use CtrlServer\Models\User;
use Illuminate\Http\Request;
use CtrlServer\Base\Controller;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
	{
		$users = User::all();
		return view('admin.index', compact('users'));
	}

	public function register(Request $request)
	{
		// Handle register post call

		return view('admin.register');
	}

	public function newUser(Request $request)
	{
		// Handle new post call

		return view('admin.new');
	}

	public function apiUserList(Request $request)
	{
		$sort_data = explode("|",$request->sort);
		$sort = 'name';
		$dir = 'asc';
		$per_page = $request->per_page;
		if (!is_null($sort_data[0]) && $sort_data[0] != "") {$sort = $sort_data[0];}
		if (count($sort_data) > 1) {$dir = $sort_data[1];}
		if (is_null($per_page)) {$per_page = 10;}
		return User::orderBy($sort, $dir)->paginate($per_page);
	}

	public function apiListAllUserByName(Request $request)
	{
		//return User::all();
		if(!is_null($request->q)) {
			$search = "%".$request->q."%";
			return User::orderBy('name','asc')->where('name','like',$search)->get(['id as value','name']);
		}
		return User::orderBy('name','asc')->get(['id as value','name']);
	}

}
