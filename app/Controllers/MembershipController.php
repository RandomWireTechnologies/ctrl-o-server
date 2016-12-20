<?php

/**
 * app/Controllers/MembershipController.php
 *
 * Resourceful controller for memberships.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers;

use Auth;
use Validator;
use CtrlServer\Models\User;
use Illuminate\Http\Request;
use CtrlServer\Base\Controller;
use CtrlServer\Models\Membership;
use CtrlServer\Models\MembershipType;
use CtrlServer\Models\MembershipCredit;
use CtrlServer\Modles\MembershipSubscription;

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

	public function apiMembershipList(Request $request)
	{
		$sort_data = explode("|",$request->sort);
		$sort = 'name';
		$dir = 'asc';
		$per_page = $request->per_page;
		if (!is_null($sort_data[0]) && $sort_data[0] != "") {$sort = $sort_data[0];}
		if (count($sort_data) > 1) {$dir = $sort_data[1];}
		if (is_null($per_page)) {$per_page = 10;}
		return Membership::with('owner')->with('type')->orderBy($sort, $dir)->paginate($per_page);
	}

    
    public function apiMembershipTypeList(Request $request)
    {
        $sort_data = explode("|",$request->sort);
        $sort = 'name';
        $dir = 'asc';
        $per_page = $request->per_page;
        if (!is_null($sort_data[0]) && $sort_data[0] != "") {$sort = $sort_data[0];}
        if (count($sort_data) > 1) {$dir = $sort_data[1];}
        if (is_null($per_page)) {$per_page = 10;}
        return MembershipType::orderBy($sort, $dir)->paginate($per_page);
    }

    
    public function apiMembershipCreditList(Request $request)
    {
        $sort_data = explode("|",$request->sort);
        $sort = 'ends_at';
        $dir = 'desc';
        $per_page = $request->per_page;
        if (!is_null($sort_data[0]) && $sort_data[0] != "") {$sort = $sort_data[0];}
        if (count($sort_data) > 1) {$dir = $sort_data[1];}
        if (is_null($per_page)) {$per_page = 10;}
        return MembershipCredit::with('membership')->with('subscription')->orderBy($sort, $dir)->paginate($per_page);
    }

	public function apiMembershipSubscriptionList(Request $request)
	{
        $sort_data = explode("|",$request->sort);
        $sort = 'name';
        $dir = 'asc';
        $per_page = $request->per_page;
        if (!is_null($sort_data[0]) && $sort_data[0] != "") {$sort = $sort_data[0];}
        if (count($sort_data) > 1) {$dir = $sort_data[1];}
        if (is_null($per_page)) {$per_page = 10;}
        return MembershipSubscription::with('membership')->orderBy($sort, $dir)->paginate($per_page);
	}

}
