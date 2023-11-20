<?php

namespace AstroCommerce\Domain\User;

use AstroCommerce\Domain\User\ValueObjects\UserId;
use Ramsey\Uuid\Uuid;


class User {

    private readonly UserId $id;

    private string $userName;

    private string $password;

    private string $email;


    /**
     * private constructor, 
     * that ommit construct new user 
     * with new User()
     *
     * @param UserId $id user id value object, must be immutable
     * @param string $userName
     * @param string $password
     * @param string $email
     */
    private function __construct(
        UserId $id,
        string $userName,
        string $password,
        string $email
    ) { 
        $this->id = $id;
        $this->userName = $userName;
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
        string $userName,
        string $password,
        string $email
    ): User {
        return new self(
            UserId::GenerateUnique(),
            $userName,
            $password,
            $email
        );
    }


    public function GetId(): UserId {
        return $this->id;
    }

    public function GetUserName(): string { 
        return $this->userName;
    }


    public function SetUserName(string $value) {
        $this->userName = $value;
    }

    public function GetPassword(): string {
        return $this->password;
    }

    public function SetPassword(string $value) {  
        $this->password = $value; 
    }

    public function GetEmail(): string {
        return $this->email;
    }

    public function SetEmail (string $value) {
        $this->email = $value;
    }

}
