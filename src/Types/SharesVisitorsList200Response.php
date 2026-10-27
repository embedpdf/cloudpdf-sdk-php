<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class SharesVisitorsList200Response extends JsonSerializableType
{
    /**
     * @var array<SharesVisitorsList200ResponseVisitorsItem> $visitors
     */
    #[JsonProperty('visitors'), ArrayType([SharesVisitorsList200ResponseVisitorsItem::class])]
    public array $visitors;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   visitors: array<SharesVisitorsList200ResponseVisitorsItem>,
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
