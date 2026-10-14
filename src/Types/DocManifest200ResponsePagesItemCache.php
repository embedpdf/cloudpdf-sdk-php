<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocManifest200ResponsePagesItemCache extends JsonSerializableType
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
     * @var int $widgetVersion
     */
    #[JsonProperty('widgetVersion')]
    public int $widgetVersion;

    /**
     * @param array{
     *   contentVersion: int,
     *   annotationVersion: int,
     *   widgetVersion: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contentVersion = $values['contentVersion'];
        $this->annotationVersion = $values['annotationVersion'];
        $this->widgetVersion = $values['widgetVersion'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
