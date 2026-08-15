<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class SharesList200Response extends JsonSerializableType
{
    /**
     * @var array<SharesList200ResponseSharesItem> $shares
     */
    #[JsonProperty('shares'), ArrayType([SharesList200ResponseSharesItem::class])]
    public array $shares;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @param array{
     *   shares: array<SharesList200ResponseSharesItem>,
     *   nextCursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->shares = $values['shares'];
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
