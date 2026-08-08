<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocPagesRotate200ResponseMetaCacheDeltaPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocPagesRotate200ResponseMetaCacheDeltaPagesItemCache $cache
     */
    #[JsonProperty('cache')]
    public DocPagesRotate200ResponseMetaCacheDeltaPagesItemCache $cache;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   cache: DocPagesRotate200ResponseMetaCacheDeltaPagesItemCache,
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
