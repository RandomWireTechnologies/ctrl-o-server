<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Validator;

use Illuminate\Foundation\Auth\ResetsPasswords;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    use ResetsPasswords;
    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
        ]);
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        return redirect('/profile');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|regex:/[0-9]{3}-?[0-9]{3}-?[0-9]{4}/|max:20',
            'address_street' => 'required|max:128',
            'address_city' => 'required|max:64',
            'address_state' => 'required|min:2|max:2',
            'address_zipcode' => 'required|regex:/[0-9]{5}-?[0-9]*/|max:10',
        ]);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address_street = $request->address_street;
        $user->address_city = $request->address_city;
        $user->address_state = $request->address_state;
        $user->address_zipcode = $request->address_zipcode;

        $user->save();
        return view('profile', compact('user'));
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}
