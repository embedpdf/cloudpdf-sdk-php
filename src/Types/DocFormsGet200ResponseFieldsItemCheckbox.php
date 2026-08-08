<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocFormsGet200ResponseFieldsItemCheckbox extends JsonSerializableType
{
    /**
     * @var DocFormsGet200ResponseFieldsItemCheckboxRef $ref
     */
    #[JsonProperty('ref')]
    public DocFormsGet200ResponseFieldsItemCheckboxRef $ref;

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
     * @var value-of<DocFormsGet200ResponseFieldsItemCheckboxOrigin> $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var DocFormsGet200ResponseFieldsItemCheckboxFlags $flags
     */
    #[JsonProperty('flags')]
    public DocFormsGet200ResponseFieldsItemCheckboxFlags $flags;

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
     * @var DocFormsGet200ResponseFieldsItemCheckboxValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public DocFormsGet200ResponseFieldsItemCheckboxValueEntry $valueEntry;

    /**
     * @var DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry $defaultValueEntry;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemCheckboxActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocFormsGet200ResponseFieldsItemCheckboxActions $actions;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemCheckboxWidgetsItem> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([DocFormsGet200ResponseFieldsItemCheckboxWidgetsItem::class])]
    public array $widgets;

    /**
     * @var bool $checked
     */
    #[JsonProperty('checked')]
    public bool $checked;

    /**
     * @var string $exportValue
     */
    #[JsonProperty('exportValue')]
    public string $exportValue;

    /**
     * @param array{
     *   ref: DocFormsGet200ResponseFieldsItemCheckboxRef,
     *   fieldObjectNumber: int,
     *   name: string,
     *   origin: value-of<DocFormsGet200ResponseFieldsItemCheckboxOrigin>,
     *   flags: DocFormsGet200ResponseFieldsItemCheckboxFlags,
     *   valueEntry: DocFormsGet200ResponseFieldsItemCheckboxValueEntry,
     *   defaultValueEntry: DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry,
     *   widgets: array<DocFormsGet200ResponseFieldsItemCheckboxWidgetsItem>,
     *   checked: bool,
     *   exportValue: string,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   actions?: ?DocFormsGet200ResponseFieldsItemCheckboxActions,
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
        $this->checked = $values['checked'];
        $this->exportValue = $values['exportValue'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
