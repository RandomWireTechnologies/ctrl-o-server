<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;
use App\User;

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
