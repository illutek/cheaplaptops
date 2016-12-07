<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'firstname' => 'required|min:2|alpha',
            'lastname' => 'required|min:2|alpha',
            'telephone' => 'required|between:10,12',
            'admin' => 'integer',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    protected function create(array $data)
    {

        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }

    public function __construct()
    {
        $this->redirectTo = route('store.index');
        $this->redirectAfterLogout = route('login');
        $this->middleware('guest', ['except' => 'logout']);
    }
}
