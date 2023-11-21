<?php

namespace AstroCommerce\Api\Rest\Controllers;

use AstroCommerce\Application\Auth\Login\LoginDto;
use AstroCommerce\Application\Auth\Login\LoginEvent;
use AstroCommerce\Application\Auth\Register\RegisterDto;
use AstroCommerce\Application\Auth\Register\RegisterEvent;
use AstroCommerce\Contracts\Auth\LoginRequest;
use AstroCommerce\Contracts\Auth\RegisterRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function  GetAllUsers(LoginRequest $request) {
        
        return LoginEvent::dispatch(new LoginDto($request));
    }


    public function Register(RegisterRequest $request) {
      
        return RegisterEvent::dispatch(new RegisterDto($request)); 
    }
}
