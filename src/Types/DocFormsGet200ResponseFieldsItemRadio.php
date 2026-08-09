<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocFormsGet200ResponseFieldsItemRadio extends JsonSerializableType
{
    /**
     * @var DocFormsGet200ResponseFieldsItemRadioRef $ref
     */
    #[JsonProperty('ref')]
    public DocFormsGet200ResponseFieldsItemRadioRef $ref;

    /**
     * @var int $fieldObjectNumber
     */
    #[JsonProperty('fieldObjectNumber')]
    public int $fieldObjectNumber;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<DocFormsGet200ResponseFieldsItemRadioOrigin> $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var DocFormsGet200ResponseFieldsItemRadioFlags $flags
     */
    #[JsonProperty('flags')]
    public DocFormsGet200ResponseFieldsItemRadioFlags $flags;

    /**
     * @var ?string $alternateName
     */
    #[JsonProperty('alternateName')]
    public ?string $alternateName;

    /**
     * @var ?string $mappingName
     */
    #[JsonProperty('mappingName')]
    public ?string $mappingName;

    /**
     * @var DocFormsGet200ResponseFieldsItemRadioValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public DocFormsGet200ResponseFieldsItemRadioValueEntry $valueEntry;

    /**
     * @var DocFormsGet200ResponseFieldsItemRadioDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public DocFormsGet200ResponseFieldsItemRadioDefaultValueEntry $defaultValueEntry;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemRadioActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocFormsGet200ResponseFieldsItemRadioActions $actions;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemRadioWidgetsItem> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([DocFormsGet200ResponseFieldsItemRadioWidgetsItem::class])]
    public array $widgets;

    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var bool $radiosInUnison
     */
    #[JsonProperty('radiosInUnison')]
    public bool $radiosInUnison;

    /**
     * @var bool $noToggleToOff
     */
    #[JsonProperty('noToggleToOff')]
    public bool $noToggleToOff;

    /**
     * @param array{
     *   ref: DocFormsGet200ResponseFieldsItemRadioRef,
     *   fieldObjectNumber: int,
     *   name: string,
     *   origin: value-of<DocFormsGet200ResponseFieldsItemRadioOrigin>,
     *   flags: DocFormsGet200ResponseFieldsItemRadioFlags,
     *   valueEntry: DocFormsGet200ResponseFieldsItemRadioValueEntry,
     *   defaultValueEntry: DocFormsGet200ResponseFieldsItemRadioDefaultValueEntry,
     *   widgets: array<DocFormsGet200ResponseFieldsItemRadioWidgetsItem>,
     *   value: string,
     *   radiosInUnison: bool,
     *   noToggleToOff: bool,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   actions?: ?DocFormsGet200ResponseFieldsItemRadioActions,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
        $this->fieldObjectNumber = $values['fieldObjectNumber'];
        $this->name = $values['name'];
        $this->origin = $values['origin'];
        $this->flags = $values['flags'];
        $this->alternateName = $values['alternateName'] ?? null;
        $this->mappingName = $values['mappingName'] ?? null;
        $this->valueEntry = $values['valueEntry'];
        $this->defaultValueEntry = $values['defaultValueEntry'];
        $this->actions = $values['actions'] ?? null;
        $this->widgets = $values['widgets'];
        $this->value = $values['value'];
        $this->radiosInUnison = $values['radiosInUnison'];
        $this->noToggleToOff = $values['noToggleToOff'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
