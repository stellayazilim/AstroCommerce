<?php

declare(strict_types=1);

namespace AstroCommerce\Domain\Categories;

use AstroCommerce\Domain\Categories\ValueObjects\CategoryId;
use AstroCommerce\Domain\Common\Models\AggregateRoot;

class Category extends AggregateRoot{

    public readonly CategoryId $id;

    public string $name;

}


