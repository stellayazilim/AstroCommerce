<?php
namespace AstroCommerce\Domain\Common\Models;
use PHPUnit\Framework\Constraint\Operator;
use SebastianBergmann\Type\GenericObjectType;
use Symfony\Component\Mime\Part\Multipart\MixedPart;


abstract class ValueObject {

    public static abstract function __is_equal($left, $right): bool;
    public static abstract function __is_not_equal($left, $right): bool;
}