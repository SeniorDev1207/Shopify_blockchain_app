<?php

namespace OhMyBrew\ShopifyApp\Objects\Values;

use Funeralzone\ValueObjects\ValueObject;
use Funeralzone\ValueObjects\Scalars\IntegerTrait;

/**
 * Value object for shop's ID.
 */
final class ShopId implements ValueObject
{
    use IntegerTrait;
}
