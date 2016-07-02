<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;

class CardsController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
		return view('cards.show', compact('card'));
	}

}
 