<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        if (Auth::user()->status=='1') {
            return '/home';
        } elseif (Auth::user()->status=='2') {
            return '/home';
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
    protected $username = 'username';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function username()
    {
        return 'username';
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
