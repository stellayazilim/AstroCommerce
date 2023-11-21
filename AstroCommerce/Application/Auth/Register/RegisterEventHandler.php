<?php

namespace AstroCommerce\Application\Auth\Register;
use AstroCommerce\Application\Common\Interfaces;
use AstroCommerce\Domain\User\User;


class RegisterEventHandler 
{

    public function __construct(
        private readonly Interfaces\Repositories\IUserRepository $userRepository,
    ) {}
    /**
     * Handle the event.
     */
    public function handle(RegisterEvent $event)
    {

        $user = User::CreateNew(
            $event->event->email,
            $event->event->password,
        );

        $this->userRepository->Create($user);
        return;
    }
}
