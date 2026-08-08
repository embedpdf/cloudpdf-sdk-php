<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocRedactionsApply200ResponseMetaCacheDeltaPagesItem extends JsonSerializableType
{
    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var DocRedactionsApply200ResponseMetaCacheDeltaPagesItemCache $cache
     */
    #[JsonProperty('cache')]
    public DocRedactionsApply200ResponseMetaCacheDeltaPagesItemCache $cache;

    /**
     * @param array{
     *   pageObjectNumber: int,
     *   cache: DocRedactionsApply200ResponseMetaCacheDeltaPagesItemCache,
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
