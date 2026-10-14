<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemAnnotationsCreate extends JsonSerializableType
{
    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var Annotation $annotation
     */
    #[JsonProperty('annotation')]
    public Annotation $annotation;

    /**
     * @var AnnotationMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public AnnotationMutationMeta $meta;

    /**
     * @param array{
     *   page: PageRef,
     *   annotation: Annotation,
     *   meta: AnnotationMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->page = $values['page'];
        $this->annotation = $values['annotation'];
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
