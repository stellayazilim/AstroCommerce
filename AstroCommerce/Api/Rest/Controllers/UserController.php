<?php

namespace AstroCommerce\Api\Rest\Controllers;

use AstroCommerce\Application\User\List\UserListDto;


use AstroCommerce\Application\User\List\UserListEvent;
use AstroCommerce\Contracts\User\List\ListUsersRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function  List(ListUsersRequest $request) {

    
        return response()->json(UserListEvent::dispatch(new UserListDto($request))['0']);
    }

}
