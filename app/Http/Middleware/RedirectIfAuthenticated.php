<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            switch (Auth::user()->roles_id) {
              case 1:
                return redirect('/admin');
                break;
              case 2:
                  return redirect('/empresa');
                  break;
              case 3:
                  return redirect('/toma_de_medida');
                  break;
              default:
                return redirect('/home');
                break;
            }
        }

        return $next($request);
    }
}
