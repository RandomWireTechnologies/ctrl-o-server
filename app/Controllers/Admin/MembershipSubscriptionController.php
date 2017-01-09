<?php 

/**
 * app/Controllers/Admin/MembershipSubscriptionController.php
 *
 * Resourceful controller for membership subscriptions.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Admin;

use Illuminate\Http\Request;
use CtrlServer\Base\Controller;
use CtrlServer\Models\MembershipSubscription;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use CtrlServer\Requests\CreateMembershipSubscriptionRequest;
use CtrlServer\Requests\UpdateMembershipSubscriptionRequest;

class MembershipSubscriptionController extends Controller
{
    /**
     * Display a listing of the MembershipSubscription.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Membership Subscriptions');

        $fields = MembershipSubscription::grid();
        
        $memberships = app('grid')->memberships();

        foreach ($fields as $field) {
            if ($field->name == 'membership_id') {
                $field->items = $memberships['fields'];
            }
        }

        $data['fields']   = encode($fields);
        $data['rules']    = encode(MembershipSubscription::$validationRules);
        $data['messages'] = encode(MembershipSubscription::$validationMessages);

        $data['memberships'] = $memberships['list'];

        return view('admin.membership_subscriptions.index', $data);
    }

    /**
     * Return an API listing of membershipSubscriptions.
     * 
     * @param  Request $request
     * @param  MembershipSubscription $membershipsubscription
     * @return Response
     */
    public function list(Request $request, MembershipSubscription $membershipsubscription)
    {
        $membershipsubscriptions = $membershipsubscription->search($request);

        return response()->json($membershipsubscriptions);
    }

    /**
     * Store a newly created MembershipSubscription in storage.
     *
     * @param CreateMembershipSubscriptionRequest $request
     * @return Response
     */
    public function store(CreateMembershipSubscriptionRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Subscription could not be created at this time. Please try again.',
            'item'    => null
        ];

        if ($membershipsubscription = MembershipSubscription::create($request->all())) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Subscription Created';
            $json['message'] = 'Your Membership Subscription was created successfully, super sweet!';
            $json['item']    = $membershipsubscription->toJson();
        }

        return response()->json($json);
    }

    /**
     * Update the specified MembershipSubscription in storage.
     *
     * @param  int $id
     * @param  UpdateMembershipSubscriptionRequest $request
     * @return Response
     */
    public function update($id, UpdateMembershipSubscriptionRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Subscription could not be updated at this time. Please try again.'
        ];

        $membershipSubscription = $this->exist($id);
        
        $membershipSubscription->fill($request->all());

        if ($membershipSubscription->save()) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Subscription Saved';
            $json['message'] = 'Your Membership Subscription was updated successfully, nice job!';
        }

        return response()->json($json);
    }

    /**
     * Remove the specified MembershipSubscription from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Subscription could not be deleted at this time. Please try again.'
        ];

        $membershipSubscription = $this->exist($id);

        if ($membershipSubscription->delete()) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Subscription Deleted';
            $json['message'] = 'Your Membership Subscription was deleted successfully, WOOT!';
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
            $membershipSubscription = MembershipSubscription::findOrFail($id);

        } catch (ModelNotFoundException $e) {
            
            flash('Membership Subscription not found', 'danger');

            return redirect(route('admin.membership-subscriptions.index'));
        }

        return $membershipSubscription;
    }
}
