<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocFormsGet200ResponseFieldsItemPushbutton extends JsonSerializableType
{
    /**
     * @var DocFormsGet200ResponseFieldsItemPushbuttonRef $ref
     */
    #[JsonProperty('ref')]
    public DocFormsGet200ResponseFieldsItemPushbuttonRef $ref;

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
     * @var value-of<DocFormsGet200ResponseFieldsItemPushbuttonOrigin> $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var DocFormsGet200ResponseFieldsItemPushbuttonFlags $flags
     */
    #[JsonProperty('flags')]
    public DocFormsGet200ResponseFieldsItemPushbuttonFlags $flags;

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
     * @var DocFormsGet200ResponseFieldsItemPushbuttonValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public DocFormsGet200ResponseFieldsItemPushbuttonValueEntry $valueEntry;

    /**
     * @var DocFormsGet200ResponseFieldsItemPushbuttonDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public DocFormsGet200ResponseFieldsItemPushbuttonDefaultValueEntry $defaultValueEntry;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemPushbuttonActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocFormsGet200ResponseFieldsItemPushbuttonActions $actions;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemPushbuttonWidgetsItem> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([DocFormsGet200ResponseFieldsItemPushbuttonWidgetsItem::class])]
    public array $widgets;

    /**
     * @param array{
     *   ref: DocFormsGet200ResponseFieldsItemPushbuttonRef,
     *   fieldObjectNumber: int,
     *   name: string,
     *   origin: value-of<DocFormsGet200ResponseFieldsItemPushbuttonOrigin>,
     *   flags: DocFormsGet200ResponseFieldsItemPushbuttonFlags,
     *   valueEntry: DocFormsGet200ResponseFieldsItemPushbuttonValueEntry,
     *   defaultValueEntry: DocFormsGet200ResponseFieldsItemPushbuttonDefaultValueEntry,
     *   widgets: array<DocFormsGet200ResponseFieldsItemPushbuttonWidgetsItem>,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   actions?: ?DocFormsGet200ResponseFieldsItemPushbuttonActions,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
