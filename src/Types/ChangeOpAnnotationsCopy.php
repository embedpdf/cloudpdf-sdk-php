<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeOpAnnotationsCopy extends JsonSerializableType
{
    /**
     * @var array<AnnotationRef> $refs
     */
    #[JsonProperty('refs'), ArrayType([AnnotationRef::class])]
    public array $refs;

    /**
     * @var ?PageRef $page
     */
    #[JsonProperty('page')]
    public ?PageRef $page;

    /**
     * @var ?ChangeOpAnnotationsCopyOffset $offset
     */
    #[JsonProperty('offset')]
    public ?ChangeOpAnnotationsCopyOffset $offset;

    /**
     * @var ?array<int> $objectNumbers
     */
    #[JsonProperty('objectNumbers'), ArrayType(['integer'])]
    public ?array $objectNumbers;

    /**
     * @param array{
     *   refs: array<AnnotationRef>,
     *   page?: ?PageRef,
     *   offset?: ?ChangeOpAnnotationsCopyOffset,
     *   objectNumbers?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->refs = $values['refs'];
        $this->page = $values['page'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->objectNumbers = $values['objectNumbers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
