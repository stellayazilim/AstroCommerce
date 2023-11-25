<?php

namespace AstroCommerce\Application;


use AstroCommerce\Application\Auth\AuthEventProvider;
use AstroCommerce\Application\User\UserEventProvider;
use AstroCommerce\Infrastructure\InfrastructureProvider;
use Illuminate\Support\ServiceProvider;

class ApplicationProvider extends  ServiceProvider {


    public function register() {
        
        $this->app->register(InfrastructureProvider::class);
        $this->app->register(AuthEventProvider::class);
        $this->app->register(UserEventProvider::class);
    }

}
