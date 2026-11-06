<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsUpdateResponse extends JsonSerializableType
{
    /**
     * @var Annotation $annotation
     */
    #[JsonProperty('annotation')]
    public Annotation $annotation;

    /**
     * @var DocAnnotationsUpdateResponseAppearance $appearance
     */
    #[JsonProperty('appearance')]
    public DocAnnotationsUpdateResponseAppearance $appearance;

    /**
     * @var AnnotationMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public AnnotationMutationMeta $meta;

    /**
     * @param array{
     *   annotation: Annotation,
     *   appearance: DocAnnotationsUpdateResponseAppearance,
     *   meta: AnnotationMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
