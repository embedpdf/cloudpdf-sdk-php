<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemAnnotationsUpdate extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var ?array<string> $skipped
     */
    #[JsonProperty('skipped'), ArrayType(['string'])]
    public ?array $skipped;

    /**
     * @var Annotation $annotation
     */
    #[JsonProperty('annotation')]
    public Annotation $annotation;

    /**
     * @var ChangeItemAnnotationsUpdateAppearance $appearance
     */
    #[JsonProperty('appearance')]
    public ChangeItemAnnotationsUpdateAppearance $appearance;

    /**
     * @var AnnotationMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public AnnotationMutationMeta $meta;

    /**
     * @param array{
     *   page: PageRef,
     *   annotation: Annotation,
     *   appearance: ChangeItemAnnotationsUpdateAppearance,
     *   meta: AnnotationMutationMeta,
     *   skipped?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->skipped = $values['skipped'] ?? null;
        $this->annotation = $values['annotation'];
        $this->appearance = $values['appearance'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
