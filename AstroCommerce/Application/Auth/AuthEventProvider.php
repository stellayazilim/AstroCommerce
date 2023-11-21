<?php

namespace AstroCommerce\Application\Auth;

use AstroCommerce\Application\Auth\Login\LoginEvent;
use AstroCommerce\Application\Auth\Login\LoginEventHandler;
use AstroCommerce\Application\Auth\Register\RegisterEvent;
use AstroCommerce\Application\Auth\Register\RegisterEventHandler;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class AuthEventProvider extends ServiceProvider {

    protected $listen = [
        LoginEvent::class => [
           LoginEventHandler::class,
        ],

        RegisterEvent::class => [
            RegisterEventHandler::class,
        ],
    ];
}
