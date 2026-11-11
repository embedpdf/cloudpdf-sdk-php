<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemAnnotationsCopy extends JsonSerializableType
{
    /**
     * @var array<Annotation> $annotations
     */
    #[JsonProperty('annotations'), ArrayType([Annotation::class])]
    public array $annotations;

    /**
     * @var array<ChangeItemAnnotationsCopyRefMapItem> $refMap
     */
    #[JsonProperty('refMap'), ArrayType([ChangeItemAnnotationsCopyRefMapItem::class])]
    public array $refMap;

    /**
     * @var array<ChangeItemAnnotationsCopyDroppedItem> $dropped
     */
    #[JsonProperty('dropped'), ArrayType([ChangeItemAnnotationsCopyDroppedItem::class])]
    public array $dropped;

    /**
     * @var AnnotationMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public AnnotationMutationMeta $meta;

    /**
     * @param array{
     *   annotations: array<Annotation>,
     *   refMap: array<ChangeItemAnnotationsCopyRefMapItem>,
     *   dropped: array<ChangeItemAnnotationsCopyDroppedItem>,
     *   meta: AnnotationMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->annotations = $values['annotations'];
        $this->refMap = $values['refMap'];
        $this->dropped = $values['dropped'];
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
