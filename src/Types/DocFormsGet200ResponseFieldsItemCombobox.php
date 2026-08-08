<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocFormsGet200ResponseFieldsItemCombobox extends JsonSerializableType
{
    /**
     * @var DocFormsGet200ResponseFieldsItemComboboxRef $ref
     */
    #[JsonProperty('ref')]
    public DocFormsGet200ResponseFieldsItemComboboxRef $ref;

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
     * @var value-of<DocFormsGet200ResponseFieldsItemComboboxOrigin> $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var DocFormsGet200ResponseFieldsItemComboboxFlags $flags
     */
    #[JsonProperty('flags')]
    public DocFormsGet200ResponseFieldsItemComboboxFlags $flags;

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
     * @var DocFormsGet200ResponseFieldsItemComboboxValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public DocFormsGet200ResponseFieldsItemComboboxValueEntry $valueEntry;

    /**
     * @var DocFormsGet200ResponseFieldsItemComboboxDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public DocFormsGet200ResponseFieldsItemComboboxDefaultValueEntry $defaultValueEntry;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemComboboxActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocFormsGet200ResponseFieldsItemComboboxActions $actions;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemComboboxWidgetsItem> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([DocFormsGet200ResponseFieldsItemComboboxWidgetsItem::class])]
    public array $widgets;

    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var string $defaultValue
     */
    #[JsonProperty('defaultValue')]
    public string $defaultValue;

    /**
     * @var bool $edit
     */
    #[JsonProperty('edit')]
    public bool $edit;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemComboboxOptionsItem> $options
     */
    #[JsonProperty('options'), ArrayType([DocFormsGet200ResponseFieldsItemComboboxOptionsItem::class])]
    public array $options;

    /**
     * @param array{
     *   ref: DocFormsGet200ResponseFieldsItemComboboxRef,
     *   fieldObjectNumber: int,
     *   name: string,
     *   origin: value-of<DocFormsGet200ResponseFieldsItemComboboxOrigin>,
     *   flags: DocFormsGet200ResponseFieldsItemComboboxFlags,
     *   valueEntry: DocFormsGet200ResponseFieldsItemComboboxValueEntry,
     *   defaultValueEntry: DocFormsGet200ResponseFieldsItemComboboxDefaultValueEntry,
     *   widgets: array<DocFormsGet200ResponseFieldsItemComboboxWidgetsItem>,
     *   value: string,
     *   defaultValue: string,
     *   edit: bool,
     *   options: array<DocFormsGet200ResponseFieldsItemComboboxOptionsItem>,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   actions?: ?DocFormsGet200ResponseFieldsItemComboboxActions,
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
        $this->defaultValue = $values['defaultValue'];
        $this->edit = $values['edit'];
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
