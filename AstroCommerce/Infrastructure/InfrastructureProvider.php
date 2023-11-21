<?php

namespace AstroCommerce\Infrastructure;


use AstroCommerce\Application\Common\Interfaces\Repositories\IUserRepository;
use AstroCommerce\Infrastructure\Repositories\Memory\UserRepository;
use Illuminate\Support\ServiceProvider;

class InfrastructureProvider extends  ServiceProvider {
    public function register() {
        $this->app->bind(IUserRepository::class, UserRepository::class);
    }

}
