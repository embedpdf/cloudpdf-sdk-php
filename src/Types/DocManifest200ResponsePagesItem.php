<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocManifest200ResponsePagesItem extends JsonSerializableType
{
    /**
     * @var DocManifest200ResponsePagesItemState $state
     */
    #[JsonProperty('state')]
    public DocManifest200ResponsePagesItemState $state;

    /**
     * @var DocManifest200ResponsePagesItemCache $cache
     */
    #[JsonProperty('cache')]
    public DocManifest200ResponsePagesItemCache $cache;

    /**
     * @param array{
     *   state: DocManifest200ResponsePagesItemState,
     *   cache: DocManifest200ResponsePagesItemCache,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->state = $values['state'];
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
