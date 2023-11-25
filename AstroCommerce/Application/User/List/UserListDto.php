<?php
namespace AstroCommerce\Application\User\List;

use AstroCommerce\Contracts\User\List\ListUsersRequest;
use Spatie\LaravelData\Data;


class UserListDto extends Data {



    public function __construct(
        ListUsersRequest $request
    ) {
    }
}
