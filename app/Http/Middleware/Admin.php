<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AdminAuthenticate extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->isAdmin == 1) {
            return $next($request);
        }
        return redirect('home')->with('error', 'You have not admin access');
    }
}
