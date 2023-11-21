<?php

namespace AstroCommerce\Application\Common\Interfaces\Services;


interface IHashPasswordService {

    public function HashPassword(string $password): string;
}
