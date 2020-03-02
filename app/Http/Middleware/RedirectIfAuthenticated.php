<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Auth;

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
        $response = $next($request);

        if (auth()->guard('admin')->check())
            return redirect()->route('admin.home');

        if (auth()->check())
            return redirect('/home');

        /*if (Auth::guard($guard)->check()) {
            if ('admin' === $guard) {
                return redirect()->route('admin.home');
            }
        }*/

        return $response;
    }
}
