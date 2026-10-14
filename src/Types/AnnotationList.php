<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationList extends JsonSerializableType
{
    /**
     * @var array<Annotation> $annotations
     */
    #[JsonProperty('annotations'), ArrayType([Annotation::class])]
    public array $annotations;

    /**
     * @var array<PageRef> $pages
     */
    #[JsonProperty('pages'), ArrayType([PageRef::class])]
    public array $pages;

    /**
     * @var ?int $auditHead
     */
    #[JsonProperty('auditHead')]
    public ?int $auditHead;

    /**
     * @param array{
     *   annotations: array<Annotation>,
     *   pages: array<PageRef>,
     *   auditHead?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->annotations = $values['annotations'];
        $this->pages = $values['pages'];
        $this->auditHead = $values['auditHead'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
