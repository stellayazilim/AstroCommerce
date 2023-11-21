<?php
namespace AstroCommerce\Application\Auth\Login;

use AstroCommerce\Contracts\Auth\LoginRequest;
use Spatie\LaravelData\Data;


class LoginDto extends Data {
    
    public string $email;
    public string $password;

    
    public function __construct(
       LoginRequest $request
    ) { 
        $this->email = $request->email;
        $this->password = $request->password;
    }
}