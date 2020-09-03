<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle($request, Closure $next)
    {
        if ($request->input('age') <= 18) {
            return response('Unauthorized.', 401);
        }
        return $next($request);
    }
}
