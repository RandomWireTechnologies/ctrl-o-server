<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Membership;
use App\MembershipType;
use App\MembershipCredit;
use App\MembershipSubscription;
use Auth;
use Validator;

class MembershipController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
	{
		$memberships = Membership::all();
		return view('membership.index', compact('memberships'));
	}

	public function show(Membership $membership)
	{
		// $card = Card::find($id);

		// return view('cards.show', compact('card'));
		// return $card;
		return view('membership.show', compact('membership'));
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
		return Membership::orderBy($sort, $dir)->paginate($per_page);
	}

	public function apiRead(Membership $membership)
	{
		return $membership;
	}

}
