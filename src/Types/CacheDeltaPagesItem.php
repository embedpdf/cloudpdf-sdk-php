<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class CacheDeltaPagesItem extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var CacheDeltaPagesItemCache $cache
     */
    #[JsonProperty('cache')]
    public CacheDeltaPagesItemCache $cache;

    /**
     * @param array{
     *   page: PageRef,
     *   cache: CacheDeltaPagesItemCache,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
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
