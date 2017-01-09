<?php 

/**
 * app/Controllers/Admin/MembershipController.php
 *
 * Resource controller for memberships.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Admin;

use CtrlServer\Models\User;
use Illuminate\Http\Request;
use CtrlServer\Base\Controller;
use CtrlServer\Models\Membership;
use CtrlServer\Models\MembershipType;
use CtrlServer\Requests\CreateMembershipRequest;
use CtrlServer\Requests\UpdateMembershipRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MembershipController extends Controller
{
    /**
     * Display a listing of the Membership.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Memberships');

        $fields = Membership::grid();

        $users = app('grid')->users();
        $types = app('grid')->membershipTypes();
        
        foreach($fields as $field) {
            if ($field->name == 'user_id') {
                $field->items = $users['fields'];
            }

            if ($field->name == 'membershiptype_id') {
                $field->items = $types['fields'];
            }
        }
        
        $data['fields']   = encode($fields);
        $data['rules']    = encode(Membership::$validationRules);
        $data['messages'] = encode(Membership::$validationMessages);

        $data['users'] = $users['list'];
        $data['types'] = $types['list'];

        return view('admin.memberships.index', $data);
    }

    /**
     * Return an API listing of memberships.
     * 
     * @param  Request $request
     * @param  Membership $membership
     * @return Response
     */
    public function list(Request $request, Membership $membership)
    {
        $memberships = $membership->search($request);

        return response()->json($memberships);
    }

    /**
     * Store a newly created Membership in storage.
     *
     * @param CreateMembershipRequest $request
     * @return Response
     */
    public function store(CreateMembershipRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership could not be created at this time. Please try again.',
            'item'    => null
        ];

        if ($membership = Membership::create($request->all())) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Created';
            $json['message'] = 'Your Membership was created successfully, super sweet!';
            $json['item']    = $membership->toJson();
        }

        return response()->json($json);
    }

    /**
     * Update the specified Membership in storage.
     *
     * @param  int $id
     * @param  UpdateMembershipRequest $request
     * @return Response
     */
    public function update($id, UpdateMembershipRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership could not be updated at this time. Please try again.'
        ];

        $membership = $this->exist($id);
        
        $membership->fill($request->all());

        if ($membership->save()) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Saved';
            $json['message'] = 'Your Membership was updated successfully, nice job!';
        }

        return response()->json($json);
    }

    /**
     * Remove the specified Membership from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership could not be deleted at this time. Please try again.'
        ];

        $membership = $this->exist($id);

        if ($membership->delete()) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Deleted';
            $json['message'] = 'Your Membership was deleted successfully, WOOT!';
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
            $membership = Membership::findOrFail($id);

        } catch (ModelNotFoundException $e) {
            
            flash('Membership not found', 'danger');

            return redirect(route('admin.memberships.index'));
        }

        return $membership;
    }
}
