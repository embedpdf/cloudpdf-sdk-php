<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsSetValue200ResponseMetaCacheDeltaPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocFormsSetValue200ResponseMetaCacheDeltaPagesItemCache $cache
     */
    #[JsonProperty('cache')]
    public DocFormsSetValue200ResponseMetaCacheDeltaPagesItemCache $cache;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   cache: DocFormsSetValue200ResponseMetaCacheDeltaPagesItemCache,
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
