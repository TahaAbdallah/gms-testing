<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    // public function redirectTo()
    // {
    //     if (Auth::user()->role_as == '1') {
    //         return 'admin';
    //     } elseif (Auth::user()->role_as == '0') {
    //         return '/';
    //     }
    // }

    protected function authenticated()
    {
        if (Auth::user()->role_as == '1') {
            return redirect('admin');
        } elseif (Auth::user()->role_as == '0') {
            return redirect('admin')->with('status', 'Sorry You are not an admin');
        }
    }


    // protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
