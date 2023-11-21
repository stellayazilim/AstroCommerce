<?php

namespace AstroCommerce\Application;


use AstroCommerce\Application\Auth\AuthEventProvider;
use AstroCommerce\Infrastructure\InfrastructureProvider;
use Illuminate\Support\ServiceProvider;

class ApplicationProvider extends  ServiceProvider {


    public function register() {
        $this->app->register(AuthEventProvider::class);
        $this->app->register(InfrastructureProvider::class);
    }

}
