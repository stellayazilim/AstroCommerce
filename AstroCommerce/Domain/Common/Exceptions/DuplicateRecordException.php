<?php

namespace AstroCommerce\Domain\Common\Exception;


class DuplicateRecordException extends \Exception {
    public string $detail;

    public string $message = "";

    public string $code = "conflict";

}