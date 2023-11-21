<?php

namespace AstroCommerce\Application\Common\Interfaces\Repositories;
use AstroCommerce\Domain\User\User;

interface IUserRepository {

    public function Create(User $user);

    /**
     * @param string $email Email of the user
     * @return ?User
     */
    public function GetByEmail(string $email): ?User;

    /**
     * @param number $limit
     * @param number $offset
     * @return User[]
     */
    public function List(int $limit=0, int $offset=0): array;
}
