<?php

namespace AstroCommerce\Infrastructure;


use AstroCommerce\Application\Common\Interfaces\Repositories\IUserRepository;

use AstroCommerce\Infrastructure\Repositories\Eloquent\UserRepository;
use Illuminate\Support\ServiceProvider;

class InfrastructureProvider extends  ServiceProvider {
    public function register() {
        $this->app->scoped(IUserRepository::class, UserRepository::class);
    }

}
