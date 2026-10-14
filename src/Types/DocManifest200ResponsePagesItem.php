<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocManifest200ResponsePagesItem extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var DocManifest200ResponsePagesItemCache $cache
     */
    #[JsonProperty('cache')]
    public DocManifest200ResponsePagesItemCache $cache;

    /**
     * @param array{
     *   page: PageRef,
     *   cache: DocManifest200ResponsePagesItemCache,
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
