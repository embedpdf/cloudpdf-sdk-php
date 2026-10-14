<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class FormFieldText extends JsonSerializableType
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
     * @var value-of<FormFieldTextOrigin> $origin
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
     * @var FormFieldTextValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public FormFieldTextValueEntry $valueEntry;

    /**
     * @var FormFieldTextDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public FormFieldTextDefaultValueEntry $defaultValueEntry;

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
     * @var ?int $maxLength
     */
    #[JsonProperty('maxLength')]
    public ?int $maxLength;

    /**
     * @var bool $multiline
     */
    #[JsonProperty('multiline')]
    public bool $multiline;

    /**
     * @var bool $password
     */
    #[JsonProperty('password')]
    public bool $password;

    /**
     * @var bool $comb
     */
    #[JsonProperty('comb')]
    public bool $comb;

    /**
     * @param array{
     *   ref: FormFieldRef,
     *   name: string,
     *   origin: value-of<FormFieldTextOrigin>,
     *   readOnly: bool,
     *   required: bool,
     *   noExport: bool,
     *   valueEntry: FormFieldTextValueEntry,
     *   defaultValueEntry: FormFieldTextDefaultValueEntry,
     *   widgets: array<FormWidget>,
     *   value: string,
     *   defaultValue: string,
     *   multiline: bool,
     *   password: bool,
     *   comb: bool,
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
     *   maxLength?: ?int,
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
        $this->value = $values['value'];
        $this->defaultValue = $values['defaultValue'];
        $this->maxLength = $values['maxLength'] ?? null;
        $this->multiline = $values['multiline'];
        $this->password = $values['password'];
        $this->comb = $values['comb'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
