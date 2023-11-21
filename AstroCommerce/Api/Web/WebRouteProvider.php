<?php

namespace AstroCommerce\Api\Web;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class WebRouteProvider extends ServiceProvider {

    public const HOME= "/home";


    public function boot() {
 

        $this->routes(function () {
      

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}