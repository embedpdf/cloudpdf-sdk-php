<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class GrantsVisitorsList200Response extends JsonSerializableType
{
    /**
     * @var array<GrantsVisitorsList200ResponseVisitorsItem> $visitors
     */
    #[JsonProperty('visitors'), ArrayType([GrantsVisitorsList200ResponseVisitorsItem::class])]
    public array $visitors;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   visitors: array<GrantsVisitorsList200ResponseVisitorsItem>,
     *   nextCursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->visitors = $values['visitors'];
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
