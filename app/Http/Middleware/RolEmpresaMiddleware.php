<?php

namespace App\Http\Middleware;

use Closure;

use Auth;

class RolEmpresaMiddleware
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
      if (Auth::user()->roles_id != 2) {
        return back();
      }
        return $next($request);
    }
}
