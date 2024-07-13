<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('lang')) {
            App::setLocale($request->input('lang'));
        }

        return $next($request);
    }
}
