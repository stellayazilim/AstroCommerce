<?php

namespace AstroCommerce\Api\Rest;


use AstroCommerce\Application\ApplicationProvider;
use Illuminate\Support\ServiceProvider;

class RestProvider extends  ServiceProvider {

    public function boot() {
    
    }
    public function register() {
        $this->app->register(\AstroCommerce\Api\Rest\RestRouteProvider::class);
        $this->app->register(ApplicationProvider::class);
    }

    

}
