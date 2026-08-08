<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocPagesRotate200ResponseMetaCacheDeltaPagesItemCache extends JsonSerializableType
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
