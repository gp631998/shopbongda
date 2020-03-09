<?php

namespace App\Http\Middleware;

use Closure;

class CheckcartMiddleware
{
    public function handle($request, Closure $next)
    {
        if (\Cart::count() == 0) {
            return redirect()->back();
        }
        return $next($request);
    }
}
