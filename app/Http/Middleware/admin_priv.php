<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin_priv
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
        if(Auth::check())
        {
            if(Auth::user()->account_type === 3)
            {
                return $next($request);
            }
            else
            {
                abort(403);
                return null;
            }
        }
        else
        {
            abort(401);
            return null;
        }
    }
}
