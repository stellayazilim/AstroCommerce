<?php
namespace AstroCommerce\Application\Auth\Register;

use AstroCommerce\Contracts\Auth\RegisterRequest;
use Spatie\LaravelData\Data;


class RegisterDto extends Data {
    
    public string $email;
    public string $password;

    
    public function __construct(
       RegisterRequest $request
    ) { 

        $this->email = $request->email;
        $this->password = $request->password;
    }
}