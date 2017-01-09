<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class RolAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->roles_id != 1) {
          return back();
        }
        return $next($request);
    }
}
