<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // Global middlewares...
        \App\Http\Middleware\CheckCookies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Web middleware group...
            \App\Http\Middleware\LocaleMiddleware::class,
            // Other web middlewares...
        ],

        'api' => [
            // API middleware group...
            // Other API middlewares...
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Other route middlewares...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
}
