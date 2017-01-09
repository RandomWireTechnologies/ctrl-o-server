<?php 

/**
 * app/Controllers/Admin/MembershipTypeController.php
 *
 * Resourceful controller for membership types.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Admin;

use Illuminate\Http\Request;
use CtrlServer\Base\Controller;
use CtrlServer\Models\MembershipType;
use CtrlServer\Requests\CreateMembershipTypeRequest;
use CtrlServer\Requests\UpdateMembershipTypeRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MembershipTypeController extends Controller
{
    /**
     * Display a listing of the MembershipType.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Membership Types');

        $data['fields']   = MembershipType::grid();
        $data['rules']    = encode(MembershipType::$validationRules);
        $data['messages'] = encode(MembershipType::$validationMessages);

        return view('admin.membership_types.index', $data);
    }

    /**
     * Return an API listing of membershipTypes.
     * 
     * @param  Request $request
     * @param  MembershipType $membershiptype
     * @return Response
     */
    public function list(Request $request, MembershipType $membershiptype)
    {
        $membershiptypes = $membershiptype->search($request);

        return response()->json($membershiptypes);
    }

    /**
     * Store a newly created MembershipType in storage.
     *
     * @param CreateMembershipTypeRequest $request
     * @return Response
     */
    public function store(CreateMembershipTypeRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Type could not be created at this time. Please try again.',
            'item'    => null
        ];

        if ($membershiptype = MembershipType::create($request->all())) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Type Created';
            $json['message'] = 'Your Membership Type was created successfully, super sweet!';
            $json['item']    = $membershiptype->toJson();
        }

        return response()->json($json);
    }

    /**
     * Update the specified MembershipType in storage.
     *
     * @param  int $id
     * @param  UpdateMembershipTypeRequest $request
     * @return Response
     */
    public function update($id, UpdateMembershipTypeRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Type could not be updated at this time. Please try again.'
        ];

        $membershipType = $this->exist($id);
        
        $membershipType->fill($request->all());

        if ($membershipType->save()) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Type Saved';
            $json['message'] = 'Your Membership Type was updated successfully, nice job!';
        }

        return response()->json($json);
    }

    /**
     * Remove the specified MembershipType from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your Membership Type could not be deleted at this time. Please try again.'
        ];

        $membershipType = $this->exist($id);

        if ($membershipType->delete()) {
            $json['type']    = 'success';
            $json['title']   = 'Membership Type Deleted';
            $json['message'] = 'Your Membership Type was deleted successfully, WOOT!';
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
            $membershipType = MembershipType::findOrFail($id);

        } catch (ModelNotFoundException $e) {
            
            flash('Membership Type not found', 'danger');

            return redirect(route('admin.membership-types.index'));
        }

        return $membershipType;
    }
}
