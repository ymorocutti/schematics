<?php

declare(strict_types=1);

namespace Giann\Schematics\Property;

abstract class Property
{
    /**
     * @param string $key
     * @param mixed $value
     */
    public function __construct(
        public string $key,
        public mixed $value
    ) {
    }
}
