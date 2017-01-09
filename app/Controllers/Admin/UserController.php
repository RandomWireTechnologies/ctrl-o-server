<?php 

/**
 * app/Controllers/Admin/UserController.php
 *
 * Resourceful controller for users.
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
use CtrlServer\Requests\CreateUserRequest;
use CtrlServer\Requests\UpdateUserRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    /**
     * Display a listing of the User.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Users');

        $data['fields']   = User::grid();
        $data['rules']    = encode(User::$validationRules);
        $data['messages'] = encode(User::$validationMessages);

        return view('admin.users.index', $data);
    }

    /**
     * Return an API listing of users.
     * 
     * @param  Request $request
     * @param  User $user
     * @return Response
     */
    public function list(Request $request, User $user)
    {
        $users = $user->search($request);

        return response()->json($users);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your User could not be created at this time. Please try again.',
            'item'    => null
        ];

        if ($user = User::create($request->all())) {
            $json['type']    = 'success';
            $json['title']   = 'User Created';
            $json['message'] = 'Your User was created successfully, super sweet!';
            $json['item']    = $user->toJson();
        }

        return response()->json($json);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int $id
     * @param  UpdateUserRequest $request
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your User could not be updated at this time. Please try again.'
        ];

        $user = $this->exist($id);
        
        $user->fill($request->all());

        if ($user->save()) {
            $json['type']    = 'success';
            $json['title']   = 'User Saved';
            $json['message'] = 'Your User was updated successfully, nice job!';
        }

        return response()->json($json);
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $json = [
            'type'    => 'error',
            'title'   => 'Whoops',
            'message' => 'Your User could not be deleted at this time. Please try again.'
        ];

        $user = $this->exist($id);

        if ($user->delete()) {
            $json['type']    = 'success';
            $json['title']   = 'User Deleted';
            $json['message'] = 'Your User was deleted successfully, WOOT!';
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
            $user = User::findOrFail($id);

        } catch (ModelNotFoundException $e) {
            
            flash('User not found', 'danger');

            return redirect(route('admin.users.index'));
        }

        return $user;
    }
}
