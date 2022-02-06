<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role_as == '1') {
                return $next($request);
            } else {
                return redirect()->back()->with('message', 'Acces Denied! as you are not an admin');
            }
        } else {
            return redirect()->view('admin.auth.login')->withSuccess('please Login First');
        }
    }
}
