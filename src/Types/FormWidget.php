<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FormWidget extends JsonSerializableType
{
    /**
     * @var ?AnnotationRef $ref
     */
    #[JsonProperty('ref')]
    public ?AnnotationRef $ref;

    /**
     * @var int $objectNumber
     */
    #[JsonProperty('objectNumber')]
    public int $objectNumber;

    /**
     * @var ?PageRef $page
     */
    #[JsonProperty('page')]
    public ?PageRef $page;

    /**
     * @param array{
     *   objectNumber: int,
     *   ref?: ?AnnotationRef,
     *   page?: ?PageRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'] ?? null;
        $this->objectNumber = $values['objectNumber'];
        $this->page = $values['page'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
