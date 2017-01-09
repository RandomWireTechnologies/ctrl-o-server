<?php 

/**
 * app/Controllers/Admin/MembershipCreditController.php
 *
 * Resourceful controller for membership credits.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Admin;

use Illuminate\Http\Request;
use CtrlServer\Base\Controller;
use CtrlServer\Models\MembershipCredit;
use CtrlServer\Requests\CreateMembershipCreditRequest;
use CtrlServer\Requests\UpdateMembershipCreditRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MembershipCreditController extends Controller
{
    /**
     * Display a listing of the Membership Credit.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Membership Credits');

        $fields = MembershipCredit::grid();

        $memberships   = app('grid')->memberships();
        $subscriptions = app('grid')->membershipSubscriptions();

        foreach($fields as $field) {
            if ($field->name == 'membership_id') {
                $field->items = $memberships['fields'];
            }

            if ($field->name == 'membership_subscription_id') {
                $field->items = $subscriptions['fields'];
            }
        }

        $data['fields']   = encode($fields);
        $data['rules']    = encode(MembershipCredit::$validationRules);
        $data['messages'] = encode(MembershipCredit::$validationMessages);

        $data['memberships']   = $memberships['list'];
        $data['subscriptions'] = $subscriptions['list'];

        return view('admin.membership_credits.index', $data);
    }

    /**
     * Return an API listing of Membership Credits.
     * 
     * @param  Request $request
     * @param  MembershipCredit $membershipcredit
     * @return Response
     */
    public function list(Request $request, MembershipCredit $membershipcredit)
    {
        $membershipcredits = $membershipcredit->search($request);

        return response()->json($membershipcredits);
    }

    /**
     * Store a newly created Membership Credit in storage.
     *
     * @param CreateMembershipCreditRequest $request
     * @return Response
     */
    public function store(CreateMembershipCreditRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Credit could not be created at this time. Please try again.',
            'item'    => null
        ];

        if ($membershipcredit = MembershipCredit::create($request->all())) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Credit Created';
            $json['message'] = 'Your Membership Credit was created successfully, super sweet!';
            $json['item']    = $membershipcredit->toJson();
        }

        return response()->json($json);
    }

    /**
     * Update the specified Membership Credit in storage.
     *
     * @param  int $id
     * @param  UpdateMembershipCreditRequest $request
     * @return Response
     */
    public function update($id, UpdateMembershipCreditRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Credit could not be updated at this time. Please try again.'
        ];

        $membershipCredit = $this->exist($id);
        
        $membershipCredit->fill($request->all());

        if ($membershipCredit->save()) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Credit Saved';
            $json['message'] = 'Your Membership Credit was updated successfully, nice job!';
        }

        return response()->json($json);
    }

    /**
     * Remove the specified Membership Credit from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Credit could not be deleted at this time. Please try again.'
        ];

        $membershipCredit = $this->exist($id);

        if ($membershipCredit->delete()) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Credit Deleted';
            $json['message'] = 'Your Membership Credit was deleted successfully, WOOT!';
        }

        return response()->json($json);
    }

    /**
     * Check if a record exists.
     *
     * @param  int $id
     * @return Eloquent
     */
    private function exist($id)
    {
        try {
            $membershipCredit = MembershipCredit::findOrFail($id);

        } catch (ModelNotFoundException $e) {
            
            flash('Membership Credit not found', 'danger');

            return redirect(route('admin.membership-credits.index'));
        }

        return $membershipCredit;
    }
}
