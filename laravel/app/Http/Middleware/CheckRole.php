<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! $request->user()->hasRole('user1')) {
            // Redirect...
        } else if (! $request->user()->hasRole('user2')) {
            // Redirect...
        } else if (! $request->user()->hasRole('user3')) {
            // Redirect...
        }

        return $next($request);
    }
}