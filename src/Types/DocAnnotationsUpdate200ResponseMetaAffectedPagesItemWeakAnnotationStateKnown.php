<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsUpdate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown extends JsonSerializableType
{
    /**
     * @var bool $hasAnyWeakAnnotations
     */
    #[JsonProperty('hasAnyWeakAnnotations')]
    public bool $hasAnyWeakAnnotations;

    /**
     * @param array{
     *   hasAnyWeakAnnotations: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->hasAnyWeakAnnotations = $values['hasAnyWeakAnnotations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
