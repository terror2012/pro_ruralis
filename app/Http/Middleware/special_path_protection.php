<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class special_path_protection
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
        if(Auth::guest())
        {
            return $next($request);
        }
        else
        {
            if(Auth::user()->account_type === 1)
            {
                return redirect('/dashboard');
            }
            elseif(Auth::user()->account_type === 2)
            {
                return redirect('/sponsorPanel');
            }
            elseif(Auth::user()->account_type === 3)
            {
                return redirect('/adminPanel');
            }
            else
            {
                abort(403);
                return null;
            }
        }
    }
}
