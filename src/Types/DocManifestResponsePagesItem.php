<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocManifestResponsePagesItem extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var DocManifestResponsePagesItemCache $cache
     */
    #[JsonProperty('cache')]
    public DocManifestResponsePagesItemCache $cache;

    /**
     * @param array{
     *   page: PageRef,
     *   cache: DocManifestResponsePagesItemCache,
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
