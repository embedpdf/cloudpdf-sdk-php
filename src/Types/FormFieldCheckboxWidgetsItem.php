<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class FormFieldCheckboxWidgetsItem extends JsonSerializableType
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
     * @var string $onState
     */
    #[JsonProperty('onState')]
    public string $onState;

    /**
     * @var string $exportValue
     */
    #[JsonProperty('exportValue')]
    public string $exportValue;

    /**
     * @var bool $checked
     */
    #[JsonProperty('checked')]
    public bool $checked;

    /**
     * @param array{
     *   objectNumber: int,
     *   onState: string,
     *   exportValue: string,
     *   checked: bool,
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
        $this->onState = $values['onState'];
        $this->exportValue = $values['exportValue'];
        $this->checked = $values['checked'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
