<?php

namespace AstroCommerce\Application\User;


use AstroCommerce\Application\User\List\UserListEvent;
use AstroCommerce\Application\User\List\UserListEventHandler;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;


class UserEventProvider extends ServiceProvider {

    protected $listen = [
        UserListEvent::class => [
           UserListEventHandler::class,
        ],
    ];
}
