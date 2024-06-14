<?php

declare(strict_types=1);

namespace Giann\Schematics;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final class NullSchema extends Schema
{
    /**
     * @param string|null $id
     * @param string|null $anchor
     * @param array<string,Schema|CircularReference|null> $defs
     * @param string|null $title
     * @param string|null $description
     * @param boolean|null $deprecated
     * @param boolean|null $readOnly
     * @param boolean|null $writeOnly
     */
    public function __construct(
        ?string $title = null,
        ?string $id = null,
        ?string $anchor = null,
        array $defs = [],
        ?string $description = null,
        ?bool $deprecated = null,
        ?bool $readOnly = null,
        ?bool $writeOnly = null,
    ) {
        parent::__construct(
            [Type::Null],
            id: $id,
            anchor: $anchor,
            defs: $defs,
            title: $title,
            description: $description,
            deprecated: $deprecated,
            readOnly: $readOnly,
            writeOnly: $writeOnly,
        );
    }
}
