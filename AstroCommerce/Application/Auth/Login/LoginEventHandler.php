<?php

namespace AstroCommerce\Application\Auth\Login;
use AstroCommerce\Application\Common\Interfaces;


class LoginEventHandler
{

    public function __construct(
        private readonly Interfaces\Repositories\IUserRepository $userRepository,
    ) {}
    /**
     * Handle the event.
     */
    public function handle(LoginEvent $event): string
    {

        $this->userRepository->GetByEmail($event->event->email);
        return "test";
    }
}
