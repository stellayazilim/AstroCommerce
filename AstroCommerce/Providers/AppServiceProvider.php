<?php

namespace AstroCommerce\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(\AstroCommerce\Api\Rest\RestProvider::class);
        $this->app->register(\AstroCommerce\Api\Web\WebProvider::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
