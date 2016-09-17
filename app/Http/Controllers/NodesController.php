<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Node;

class NodesController extends Controller
{

	public function __construct()
    {
        //$this->middleware('auth');
    }


   	public function index()
	{
		return view('nodes.index');
	}

	public function show(Node $node)
	{
		return view('nodes.show', compact('node'));
	}

	public function apiList(Request $request)
	{
		$sort_data = explode("|",$request->sort);
		$sort = 'name';
		$dir = 'asc';
		$per_page = $request->per_page;
		if (!is_null($sort_data[0]) && $sort_data[0] != "") {$sort = $sort_data[0];}
		if (count($sort_data) > 1) {$dir = $sort_data[1];}
		if (is_null($per_page)) {$per_page = 10;}
		return Node::orderBy($sort, $dir)->paginate($per_page);
	}

	public function apiRead(Node $node)
	{
		return $node;
	}
}
