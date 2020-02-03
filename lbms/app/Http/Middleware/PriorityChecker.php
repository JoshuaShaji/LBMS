<?php

namespace App\Http\Middleware;

use Closure;

class PriorityChecker
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
        echo "priority checker";
        return $next($request);
    }
}
