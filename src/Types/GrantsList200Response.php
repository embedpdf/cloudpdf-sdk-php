<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class GrantsList200Response extends JsonSerializableType
{
    /**
     * @var array<GrantsList200ResponseGrantsItem> $grants
     */
    #[JsonProperty('grants'), ArrayType([GrantsList200ResponseGrantsItem::class])]
    public array $grants;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   grants: array<GrantsList200ResponseGrantsItem>,
     *   nextCursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->grants = $values['grants'];
        $this->nextCursor = $values['nextCursor'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
