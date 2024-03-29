<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if (auth()->user())
        {
            if (auth()->user()->is_admin)
            {
                return $next($request);
            }
        }
        return redirect('dashboard')->with('error', 'You haven\'t got admin access rights');
    }
}
