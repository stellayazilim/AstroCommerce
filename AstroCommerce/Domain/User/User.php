<?php

namespace AstroCommerce\Domain\User;

use AstroCommerce\Domain\User\ValueObjects\UserId;


class User {

    public readonly UserId $id;

    public string $password;

    public string $email;


    /**
     * private constructor, 
     * that ommit construct new user 
     * with new User()
     *
     * @param UserId $id
     * @param string $password
     * @param string $email
     */
    private function __construct(
        UserId $id,
        string $email,
        string $password,
    ) { 
        $this->id = $id;
        $this->password = $password;
        $this->email = $email; 
    }


    /**
     * Factory function creates new User 
     *
     * @param string $userName User name
     * @param string $password User password
     * @param string $email User email
     * @return User Returns new User 
     */
    public static function CreateNew(
        string $email,
        string $password,
    ): User {
        return new self(
            UserId::GenerateUnique(),
            $email,
            $password
        );
    }
}
