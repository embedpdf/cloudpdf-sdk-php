<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocFormsGet200ResponseFieldsItemUnknown extends JsonSerializableType
{
    /**
     * @var DocFormsGet200ResponseFieldsItemUnknownRef $ref
     */
    #[JsonProperty('ref')]
    public DocFormsGet200ResponseFieldsItemUnknownRef $ref;

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
     * @var value-of<DocFormsGet200ResponseFieldsItemUnknownOrigin> $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var DocFormsGet200ResponseFieldsItemUnknownFlags $flags
     */
    #[JsonProperty('flags')]
    public DocFormsGet200ResponseFieldsItemUnknownFlags $flags;

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
     * @var DocFormsGet200ResponseFieldsItemUnknownValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public DocFormsGet200ResponseFieldsItemUnknownValueEntry $valueEntry;

    /**
     * @var DocFormsGet200ResponseFieldsItemUnknownDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public DocFormsGet200ResponseFieldsItemUnknownDefaultValueEntry $defaultValueEntry;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemUnknownActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocFormsGet200ResponseFieldsItemUnknownActions $actions;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemUnknownWidgetsItem> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([DocFormsGet200ResponseFieldsItemUnknownWidgetsItem::class])]
    public array $widgets;

    /**
     * @var string $rawValue
     */
    #[JsonProperty('rawValue')]
    public string $rawValue;

    /**
     * @param array{
     *   ref: DocFormsGet200ResponseFieldsItemUnknownRef,
     *   fieldObjectNumber: int,
     *   name: string,
     *   origin: value-of<DocFormsGet200ResponseFieldsItemUnknownOrigin>,
     *   flags: DocFormsGet200ResponseFieldsItemUnknownFlags,
     *   valueEntry: DocFormsGet200ResponseFieldsItemUnknownValueEntry,
     *   defaultValueEntry: DocFormsGet200ResponseFieldsItemUnknownDefaultValueEntry,
     *   widgets: array<DocFormsGet200ResponseFieldsItemUnknownWidgetsItem>,
     *   rawValue: string,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   actions?: ?DocFormsGet200ResponseFieldsItemUnknownActions,
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
        $this->rawValue = $values['rawValue'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
