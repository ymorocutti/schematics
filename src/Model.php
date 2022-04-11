<?php

declare(strict_types=1);

namespace Giann\Schematics;

interface Model
{
    public static function fromJson(array $json): object;
}
