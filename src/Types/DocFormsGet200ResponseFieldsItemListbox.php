<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocFormsGet200ResponseFieldsItemListbox extends JsonSerializableType
{
    /**
     * @var DocFormsGet200ResponseFieldsItemListboxRef $ref
     */
    #[JsonProperty('ref')]
    public DocFormsGet200ResponseFieldsItemListboxRef $ref;

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
     * @var value-of<DocFormsGet200ResponseFieldsItemListboxOrigin> $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var DocFormsGet200ResponseFieldsItemListboxFlags $flags
     */
    #[JsonProperty('flags')]
    public DocFormsGet200ResponseFieldsItemListboxFlags $flags;

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
     * @var DocFormsGet200ResponseFieldsItemListboxValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public DocFormsGet200ResponseFieldsItemListboxValueEntry $valueEntry;

    /**
     * @var DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry $defaultValueEntry;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemListboxActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocFormsGet200ResponseFieldsItemListboxActions $actions;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemListboxWidgetsItem> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([DocFormsGet200ResponseFieldsItemListboxWidgetsItem::class])]
    public array $widgets;

    /**
     * @var array<string> $selectedValues
     */
    #[JsonProperty('selectedValues'), ArrayType(['string'])]
    public array $selectedValues;

    /**
     * @var bool $multiSelect
     */
    #[JsonProperty('multiSelect')]
    public bool $multiSelect;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemListboxOptionsItem> $options
     */
    #[JsonProperty('options'), ArrayType([DocFormsGet200ResponseFieldsItemListboxOptionsItem::class])]
    public array $options;

    /**
     * @param array{
     *   ref: DocFormsGet200ResponseFieldsItemListboxRef,
     *   fieldObjectNumber: int,
     *   name: string,
     *   origin: value-of<DocFormsGet200ResponseFieldsItemListboxOrigin>,
     *   flags: DocFormsGet200ResponseFieldsItemListboxFlags,
     *   valueEntry: DocFormsGet200ResponseFieldsItemListboxValueEntry,
     *   defaultValueEntry: DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry,
     *   widgets: array<DocFormsGet200ResponseFieldsItemListboxWidgetsItem>,
     *   selectedValues: array<string>,
     *   multiSelect: bool,
     *   options: array<DocFormsGet200ResponseFieldsItemListboxOptionsItem>,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   actions?: ?DocFormsGet200ResponseFieldsItemListboxActions,
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
        $this->selectedValues = $values['selectedValues'];
        $this->multiSelect = $values['multiSelect'];
        $this->options = $values['options'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
