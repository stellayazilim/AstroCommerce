<?php

namespace AstroCommerce\Domain\User\ValueObjects;


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use AstroCommerce\Domain\Common\Models\ValueObject;

class UserId extends ValueObject {
    
    private UuidInterface $value;
    

    private function __construct(UuidInterface $value) {
      $this->value = $value;
    }

    public function Value(): UuidInterface {
        return $this->value;
    }
 
    static function GenerateUnique(): UserId {
        return new self(Uuid::uuid4());
    }

    public static function __is_equal($left, $right): bool {
        return $left->Value() === $right->Value();
    }

    public static function __is_not_equal($left, $right):bool {
        return $left->Value() !== $right->Value();
    }

}