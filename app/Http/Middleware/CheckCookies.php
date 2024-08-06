<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCookies
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->cookie('cookies_accepted')) {
            // Vous pouvez aussi rediriger vers une page spécifique si nécessaire
            return response(view('cookie-banner'))->withCookie(cookie('cookies_accepted', false, 525600));
        }

        return $next($request);
    }
}
