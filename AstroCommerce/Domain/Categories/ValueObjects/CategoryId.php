<?php

namespace AstroCommerce\Domain\Categories\ValueObjects;

use AstroCommerce\Domain\Common\Models\ValueObject;
use Ramsey\Uuid\UuidInterface;
use Ramsey\Uuid\Uuid;

class CategoryId extends ValueObject {
    
    private UuidInterface $value;
    

    private function __construct(UuidInterface $value) {
      $this->value = $value;
    }

    public function Value(): UuidInterface {
        return $this->value;
    }
 
    static function GenerateUnique(): CategoryId {
        return new self(Uuid::uuid4());
    }

    public static function __is_equal($left, $right): bool {
        return $left->Value() === $right->Value();
    }

    public static function __is_not_equal($left, $right):bool {
        return $left->Value() !== $right->Value();
    }

}