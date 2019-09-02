<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard('user')->check()) {
            return redirect()->route('index',['locale'=>session('locale')]);
        }

        if(Auth::guard('admin')->check()){

            return redirect()->route('adminHome',['locale'=>session('locale')]);
        }

        return $next($request);
    }
}
