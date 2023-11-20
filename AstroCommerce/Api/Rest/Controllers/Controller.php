<?php

namespace AstroCommerce\Api\Rest\Controllers;

use AstroCommerce\Contracts\Auth\LoginRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function  GetAllUsers(LoginRequest $request) {
     
        return response($request)->header("Content-Type", "application/json");
    }
}
