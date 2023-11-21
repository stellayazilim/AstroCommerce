<?php

namespace AstroCommerce\Api\Web;


use Illuminate\Support\ServiceProvider;

class WebProvider extends  ServiceProvider {

    public function boot() {

    }
    public function register() {
        $this->app->register(\AstroCommerce\Api\Web\WebRouteProvider::class);
        // $this->app->register(ApplicationProvider::class);
    }



}
