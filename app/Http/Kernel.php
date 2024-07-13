<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // ...

    protected $middlewareGroups = [
        'web' => [
            // Autres middlewares web...
            \App\Http\Middleware\LocaleMiddleware::class,
        ],

        'api' => [
            // Middlewares API...
        ],
    ];

    // ...
}
