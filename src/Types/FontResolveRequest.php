<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FontResolveRequest extends JsonSerializableType
{
    /**
     * @var ?AnnotationRef $annotation
     */
    #[JsonProperty('annotation')]
    public ?AnnotationRef $annotation;

    /**
     * @var array<FontResolveRun> $runs
     */
    #[JsonProperty('runs'), ArrayType([FontResolveRun::class])]
    public array $runs;

    /**
     * @param array{
     *   runs: array<FontResolveRun>,
     *   annotation?: ?AnnotationRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->annotation = $values['annotation'] ?? null;
        $this->runs = $values['runs'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
