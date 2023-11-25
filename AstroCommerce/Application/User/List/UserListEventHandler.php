<?php
namespace AstroCommerce\Application\User\List;
use AstroCommerce\Application\Common\Interfaces;


class UserListEventHandler
{

    public function __construct(
        private readonly Interfaces\Repositories\IUserRepository $userRepository,
    ) {}
    /**
     * Handle the event.
     */
    public function handle(UserListEvent $event): array
    { 
        
        \Log::channel("stderr")->info($this->userRepository::class);
        return $this->userRepository->List();
        
    }
}
