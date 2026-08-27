<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesInsertBlank200ResponseMetaCacheDeltaPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocPagesInsertBlank200ResponseMetaCacheDeltaPagesItemCache $cache
     */
    #[JsonProperty('cache')]
    public DocPagesInsertBlank200ResponseMetaCacheDeltaPagesItemCache $cache;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   cache: DocPagesInsertBlank200ResponseMetaCacheDeltaPagesItemCache,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pageObjectNumber = $values['pageObjectNumber'];
        $this->cache = $values['cache'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
