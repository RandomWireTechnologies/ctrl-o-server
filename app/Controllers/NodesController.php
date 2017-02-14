<?php

/**
 * app/Controllers/NodesController.php
 *
 * Resourceful controller for nodes.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers;

use CtrlServer\Models\Node;
use Illuminate\Http\Request;
use CtrlServer\Base\Controller;

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

	public function getAccess(Node $node)
	{
		return $node;
	}
}
