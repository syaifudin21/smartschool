<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   protected function redirectTo()
    {
        if (Auth::user()->status=='1') {
            return '/home';
        } elseif (Auth::user()->status=='2') {
            return '/admin';
        } elseif (Auth::user()->status=='3') {
            return '/guru';
        } elseif (Auth::user()->status=='4') {
            return '/home';
        } elseif (Auth::user()->status=='5') {
            return '/home';
        } elseif (Auth::user()->status=='6') {
            return '/home';
        } elseif (Auth::user()->status=='7') {
            return '/home';
        } elseif (Auth::user()->status=='8') {
            return '/home';
        } elseif (Auth::user()->status=='9') {
            return '/home';
        } elseif (Auth::user()->status=='10') {
            return '/tu';
        } elseif (Auth::user()->status=='11') {
            return '/admin';
        } else {
            return '/home';
        } 
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'status' => $data['status'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
