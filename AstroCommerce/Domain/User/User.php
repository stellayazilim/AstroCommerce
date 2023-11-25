<?php

namespace AstroCommerce\Domain\User;

use AstroCommerce\Domain\User\ValueObjects\UserId;


class User {

    public readonly UserId $id;

    public string $firstName;
    public string $lastName;
    public string $phone;
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
    public function __construct(
        UserId $id,
        string $firstName,
        string $lastName,
        string $phone,
        string $email,
        string $password,
    ) { 
        $this->id = $id;
        $this->firstName= $firstName;
        $this->lastName= $lastName;
        $this->phone= $phone;
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
        string $firstName,
        string $lastName,
        string $phone,
        string $email,
        string $password,
    ): User {
        return new self(
            UserId::GenerateUnique(),
            $firstName,
            $lastName,
            $phone,
            $email,
            $password
        );
    }
}
