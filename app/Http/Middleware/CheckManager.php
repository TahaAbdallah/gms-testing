<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth('manager')->check()) {
           return $next($request);
        } else {
            return redirect()->route('managerLogin')->withSuccess('please Login First');
        }
    }
}
