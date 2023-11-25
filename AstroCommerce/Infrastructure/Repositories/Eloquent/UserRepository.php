<?php

namespace AstroCommerce\Infrastructure\Repositories\Eloquent;
use AstroCommerce\Application\Common\Interfaces\Repositories\IUserRepository;
use AstroCommerce\Domain\User\User;
use AstroCommerce\Domain\User\ValueObjects\UserId;
use AstroCommerce\Infrastructure\Models;
use AstroCommerce\Domain\Common\Exception;
use AstroCommerce\Infrastructure\Models\UserModel;
use Ramsey\Uuid\Uuid;


class UserRepository implements IUserRepository {
    public function Create(User $user) {
        $_user = new Models\UserModel();

        $_user->firstName = $user->firstName;
        $_user->lastName = $user->lastName;
        $_user->email = $user->email;
        $_user->password = $user->password;
        $_user->phone = $user->phone;

        try {
            $_user->save();
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1062) {
                throw new Exception\DuplicateRecordException();
            }
         }
    }

    public function List(int $limit = 0,int $offset = 0): array {

        $users = array();
        $res = UserModel::all()->toArray();

        foreach($res as $u) {

            \Log::channel("stderr")->info($u);
            $users[] = new User(
                new UserId(Uuid::fromString($u["id"])),
                $u['firstName'],
                $u['lastName'],
                $u['phone'],
                $u['email'],
                $u['password'],
            );
        }

     
        return $users;
    }

    public function GetByEmail(string $email): ?User {

        return null;
    }
}
