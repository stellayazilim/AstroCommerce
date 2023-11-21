<?php

namespace AstroCommerce\Infrastructure\Repositories\Memory;
use AstroCommerce\Application\Common\Interfaces\Repositories\IUserRepository;
use AstroCommerce\Domain\User\User;
use Illuminate\Support\Facades\Log;


class UserRepository implements IUserRepository {
    public static $users = array();


    public function Create(User $user) {
      
        array_push(self::$users, $user);

        Log::channel('stderr')->info(json_encode(UserRepository::$users));
    }

    public function List(int $limit = 0,int $offset = 0): array {
        return  array();
    }

    public function GetByEmail(string $email): ?User {

        Log::channel('stderr')->info('Get by email:'. $email);

        return null;
    }
}
