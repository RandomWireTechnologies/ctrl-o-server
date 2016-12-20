<?php 

namespace CtrlServer\Controllers;

use Flash;
use CtrlServer\Models\User;
use CtrlServer\Requests\CreateUserRequest;
use CtrlServer\Requests\UpdateUserRequest;
use CtrlServer\Base\Controller as BaseController;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends BaseController
{
    /**
     * Display a listing of the User.
     *
     * @return Response
     */
    public function index()
    {
        bcs('');

        $users = User::paginate(10);

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        bcs([]);

        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        User::create($input);
        
        Flash::success('User saved successfully.');
        
        return redirect(route('users.index'));
    }

    /**
     * Show the specified User.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        bcs([]);

        $user = $this->exist($id);
        
        return view('users.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        bcs([]);
        
        $user = $this->exist($id);
        
        return view('users.edit')->with(compact('user'));
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
        $user = $this->exist($id);

        $user->fill($request->all());

        $user->save();

        Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->exist($id);

        $user->delete();

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
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
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return $user;
    }
}
