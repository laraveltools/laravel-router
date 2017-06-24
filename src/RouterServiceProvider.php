<?php

namespace SebastiaanLuca\Router;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use SebastiaanLuca\Router\Kernel\RegistersRouters;

class RouterServiceProvider extends RouteServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $kernel = app(Kernel::class);

        if (class_uses_trait($kernel, RegistersRouters::class)) {
            $kernel->bootRouters();
        }
    }
}
