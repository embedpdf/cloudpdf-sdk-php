<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesInsertBlank200ResponseMeta extends JsonSerializableType
{
    /**
     * @var array<DocPagesInsertBlank200ResponseMetaAffectedPagesItem> $affectedPages
     */
    #[JsonProperty('affectedPages'), ArrayType([DocPagesInsertBlank200ResponseMetaAffectedPagesItem::class])]
    public array $affectedPages;

    /**
     * @var ?DocPagesInsertBlank200ResponseMetaCacheDelta $cacheDelta
     */
    #[JsonProperty('cacheDelta')]
    public ?DocPagesInsertBlank200ResponseMetaCacheDelta $cacheDelta;

    /**
     * @param array{
     *   affectedPages: array<DocPagesInsertBlank200ResponseMetaAffectedPagesItem>,
     *   cacheDelta?: ?DocPagesInsertBlank200ResponseMetaCacheDelta,
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
