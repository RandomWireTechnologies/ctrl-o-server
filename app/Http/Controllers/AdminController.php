<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

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

	public function new(Request $request)
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
}
