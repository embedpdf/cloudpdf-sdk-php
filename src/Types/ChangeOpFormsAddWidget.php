<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpFormsAddWidget extends JsonSerializableType
{
    /**
     * @var FormFieldRef $field
     */
    #[JsonProperty('field')]
    public FormFieldRef $field;

    /**
     * @var WidgetPlacement $placement
     */
    #[JsonProperty('placement')]
    public WidgetPlacement $placement;

    /**
     * @var ?int $objectNumber
     */
    #[JsonProperty('objectNumber')]
    public ?int $objectNumber;

    /**
     * @var ?int $splitObjectNumber
     */
    #[JsonProperty('splitObjectNumber')]
    public ?int $splitObjectNumber;

    /**
     * @param array{
     *   field: FormFieldRef,
     *   placement: WidgetPlacement,
     *   objectNumber?: ?int,
     *   splitObjectNumber?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->placement = $values['placement'];
        $this->objectNumber = $values['objectNumber'] ?? null;
        $this->splitObjectNumber = $values['splitObjectNumber'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
