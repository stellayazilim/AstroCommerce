<?php

namespace AstroCommerce\Contracts\User\List;

use AstroCommerce\Domain\User\User;

class ListUsersResponse {
    public $id;
    public $firstName;
    public $lastName;   
    public $email;
    public $phone;

   
    public function __construct(User $user) {
        $this->id = $user->id;
        $this->firstName = $user->firstName;
        $this->lastName = $user->lastName;
        $this->email = $user->email;
        $this->phone = $user->phone;
    }
}
