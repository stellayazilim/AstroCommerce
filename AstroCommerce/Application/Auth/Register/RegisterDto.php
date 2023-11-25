<?php
namespace AstroCommerce\Application\Auth\Register;

use AstroCommerce\Contracts\Auth\RegisterRequest;
use Spatie\LaravelData\Data;


class RegisterDto extends Data {
    
    public string $email;
    public string $password;
    public string $phone;

    public string $firstName;

    public string $lastName;
    public function __construct(
       RegisterRequest $request
    ) { 
        $this->firstName = $request->firstName;
        $this->lastName = $request->lastName;   
        $this->phone = $request->phone;
        $this->email = $request->email;
        $this->password = $request->password;
    }
}