<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch extends JsonSerializableType
{
    /**
     * @var string $path
     */
    #[JsonProperty('path')]
    public string $path;

    /**
     * @param array{
     *   path: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->path = $values['path'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
