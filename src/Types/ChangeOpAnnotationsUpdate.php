<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpAnnotationsUpdate extends JsonSerializableType
{
    /**
     * @var AnnotationRef $ref
     */
    #[JsonProperty('ref')]
    public AnnotationRef $ref;

    /**
     * @var AnnotationPatch $patch
     */
    #[JsonProperty('patch')]
    public AnnotationPatch $patch;

    /**
     * @var ?ChangeOpAnnotationsUpdateResources $resources
     */
    #[JsonProperty('resources')]
    public ?ChangeOpAnnotationsUpdateResources $resources;

    /**
     * @var ?AnnotationPatch $expect
     */
    #[JsonProperty('expect')]
    public ?AnnotationPatch $expect;

    /**
     * @param array{
     *   ref: AnnotationRef,
     *   patch: AnnotationPatch,
     *   resources?: ?ChangeOpAnnotationsUpdateResources,
     *   expect?: ?AnnotationPatch,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
        $this->patch = $values['patch'];
        $this->resources = $values['resources'] ?? null;
        $this->expect = $values['expect'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
