<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class FormFieldListbox extends JsonSerializableType
{
    /**
     * @var FormFieldRef $ref
     */
    #[JsonProperty('ref')]
    public FormFieldRef $ref;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<FormFieldListboxOrigin> $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var bool $readOnly
     */
    #[JsonProperty('readOnly')]
    public bool $readOnly;

    /**
     * @var bool $required
     */
    #[JsonProperty('required')]
    public bool $required;

    /**
     * @var bool $noExport
     */
    #[JsonProperty('noExport')]
    public bool $noExport;

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
     * @var FormFieldListboxValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public FormFieldListboxValueEntry $valueEntry;

    /**
     * @var FormFieldListboxDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public FormFieldListboxDefaultValueEntry $defaultValueEntry;

    /**
     * @var ?PdfFieldActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfFieldActions $actions;

    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $createdBy
     */
    #[JsonProperty('createdBy')]
    public ?string $createdBy;

    /**
     * @var ?DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?string $filledBy
     */
    #[JsonProperty('filledBy')]
    public ?string $filledBy;

    /**
     * @var ?string $filledByName
     */
    #[JsonProperty('filledByName')]
    public ?string $filledByName;

    /**
     * @var ?DateTime $filledAt
     */
    #[JsonProperty('filledAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $filledAt;

    /**
     * @var ?string $importedBy
     */
    #[JsonProperty('importedBy')]
    public ?string $importedBy;

    /**
     * @var array<FormWidget> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([FormWidget::class])]
    public array $widgets;

    /**
     * @var array<string> $selectedValues
     */
    #[JsonProperty('selectedValues'), ArrayType(['string'])]
    public array $selectedValues;

    /**
     * @var array<string> $defaultValue
     */
    #[JsonProperty('defaultValue'), ArrayType(['string'])]
    public array $defaultValue;

    /**
     * @var bool $multiSelect
     */
    #[JsonProperty('multiSelect')]
    public bool $multiSelect;

    /**
     * @var array<FormFieldListboxOptionsItem> $options
     */
    #[JsonProperty('options'), ArrayType([FormFieldListboxOptionsItem::class])]
    public array $options;

    /**
     * @var int $topIndex
     */
    #[JsonProperty('topIndex')]
    public int $topIndex;

    /**
     * @param array{
     *   ref: FormFieldRef,
     *   name: string,
     *   origin: value-of<FormFieldListboxOrigin>,
     *   readOnly: bool,
     *   required: bool,
     *   noExport: bool,
     *   valueEntry: FormFieldListboxValueEntry,
     *   defaultValueEntry: FormFieldListboxDefaultValueEntry,
     *   widgets: array<FormWidget>,
     *   selectedValues: array<string>,
     *   defaultValue: array<string>,
     *   multiSelect: bool,
     *   options: array<FormFieldListboxOptionsItem>,
     *   topIndex: int,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   actions?: ?PdfFieldActions,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   createdAt?: ?DateTime,
     *   filledBy?: ?string,
     *   filledByName?: ?string,
     *   filledAt?: ?DateTime,
     *   importedBy?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
        $this->name = $values['name'];
        $this->origin = $values['origin'];
        $this->readOnly = $values['readOnly'];
        $this->required = $values['required'];
        $this->noExport = $values['noExport'];
        $this->alternateName = $values['alternateName'] ?? null;
        $this->mappingName = $values['mappingName'] ?? null;
        $this->valueEntry = $values['valueEntry'];
        $this->defaultValueEntry = $values['defaultValueEntry'];
        $this->actions = $values['actions'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->createdBy = $values['createdBy'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->filledBy = $values['filledBy'] ?? null;
        $this->filledByName = $values['filledByName'] ?? null;
        $this->filledAt = $values['filledAt'] ?? null;
        $this->importedBy = $values['importedBy'] ?? null;
        $this->widgets = $values['widgets'];
        $this->selectedValues = $values['selectedValues'];
        $this->defaultValue = $values['defaultValue'];
        $this->multiSelect = $values['multiSelect'];
        $this->options = $values['options'];
        $this->topIndex = $values['topIndex'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
