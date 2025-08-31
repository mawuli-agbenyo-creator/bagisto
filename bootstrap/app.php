<?php

use Illuminate\Foundation\Application;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

require __DIR__ . '/../vendor/autoload.php';

return Application::configure(basePath: dirname(__DIR__))
    // Configure global middleware
    ->withMiddleware(function ($middleware) {
        // Remove session and cookie middleware from 'web' group
        $middleware->removeFromGroup('web', [
            StartSession::class,
            AddQueuedCookiesToResponse::class,
        ]);

        // Add session and cookie middleware globally for all requests
        $middleware->append([
            StartSession::class,
            AddQueuedCookiesToResponse::class,
        ]);
    })
    // Bind important interfaces
    ->withBindings(function ($app) {
        $app->singleton(
            Illuminate\Contracts\Http\Kernel::class,
            App\Http\Kernel::class
        );

        $app->singleton(
            Illuminate\Contracts\Console\Kernel::class,
            App\Console\Kernel::class
        );

        $app->singleton(
            Illuminate\Contracts\Debug\ExceptionHandler::class,
            App\Exceptions\Handler::class
        );
    });
