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
        if ($guard == "lecturer" && Auth::guard($guard)->check()) {
            return redirect( app()->getLocale() . '/tutor');
        }
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect( app()->getLocale() . '/admin_panel');
        }
        if (Auth::guard($guard)->check()) {
            return redirect( app()->getLocale() .'/student_dashboard');
        }

        return $next($request);
    }
}
