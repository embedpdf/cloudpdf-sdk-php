<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesInsert200ResponseMeta extends JsonSerializableType
{
    /**
     * @var array<DocPagesInsert200ResponseMetaAffectedPagesItem> $affectedPages
     */
    #[JsonProperty('affectedPages'), ArrayType([DocPagesInsert200ResponseMetaAffectedPagesItem::class])]
    public array $affectedPages;

    /**
     * @var ?DocPagesInsert200ResponseMetaCacheDelta $cacheDelta
     */
    #[JsonProperty('cacheDelta')]
    public ?DocPagesInsert200ResponseMetaCacheDelta $cacheDelta;

    /**
     * @param array{
     *   affectedPages: array<DocPagesInsert200ResponseMetaAffectedPagesItem>,
     *   cacheDelta?: ?DocPagesInsert200ResponseMetaCacheDelta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->affectedPages = $values['affectedPages'];
        $this->cacheDelta = $values['cacheDelta'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
