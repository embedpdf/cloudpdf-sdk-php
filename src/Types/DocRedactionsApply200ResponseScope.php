<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocRedactionsApply200ResponseScope extends JsonSerializableType
{
    /**
     * @var ?array<PageRef> $pages
     */
    #[JsonProperty('pages'), ArrayType([PageRef::class])]
    public ?array $pages;

    /**
     * @var ?array<AnnotationRef> $annotations
     */
    #[JsonProperty('annotations'), ArrayType([AnnotationRef::class])]
    public ?array $annotations;

    /**
     * @param array{
     *   pages?: ?array<PageRef>,
     *   annotations?: ?array<AnnotationRef>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->pages = $values['pages'] ?? null;
        $this->annotations = $values['annotations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
