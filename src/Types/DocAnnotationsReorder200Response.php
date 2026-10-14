<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsReorder200Response extends JsonSerializableType
{
    /**
     * @var array<AnnotationRef> $order
     */
    #[JsonProperty('order'), ArrayType([AnnotationRef::class])]
    public array $order;

    /**
     * @var AnnotationMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public AnnotationMutationMeta $meta;

    /**
     * @param array{
     *   order: array<AnnotationRef>,
     *   meta: AnnotationMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->order = $values['order'];
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
