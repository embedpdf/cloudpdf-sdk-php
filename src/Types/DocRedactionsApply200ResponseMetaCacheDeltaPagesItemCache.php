<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocRedactionsApply200ResponseMetaCacheDeltaPagesItemCache extends JsonSerializableType
{
    /**
     * @var int $contentVersion
     */
    #[JsonProperty('contentVersion')]
    public int $contentVersion;

    /**
     * @var int $annotationVersion
     */
    #[JsonProperty('annotationVersion')]
    public int $annotationVersion;

    /**
     * @param array{
     *   contentVersion: int,
     *   annotationVersion: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contentVersion = $values['contentVersion'];
        $this->annotationVersion = $values['annotationVersion'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
