<?php

/**
 * app/Controllers/CardsController.php
 *
 * Resourceful controller for cards.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers;

use CtrlServer\Models\Card;
use CtrlServer\Models\User;
use Illuminate\Http\Request;
use CtrlServer\Base\Controller;

class CardsController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


   	public function index()
	{
		$cards = Card::all();
		return view('cards.index', compact('cards'));
	}

	public function show(Card $card)
	{
		// $card = Card::find($id);

		// return view('cards.show', compact('card'));
		// return $card;
		//$users = User::all(['id as value','name']);
		$users = User::orderBy('name','asc')->get(['id as value','name']);
		return view('cards.show', compact('card','users'));
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
		return Card::with('user')->orderBy($sort, $dir)->paginate($per_page);
	}

	public function apiRead(Card $card)
	{
		return $card;
	}
}
