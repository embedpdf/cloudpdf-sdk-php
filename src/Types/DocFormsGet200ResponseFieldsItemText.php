<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocFormsGet200ResponseFieldsItemText extends JsonSerializableType
{
    /**
     * @var DocFormsGet200ResponseFieldsItemTextRef $ref
     */
    #[JsonProperty('ref')]
    public DocFormsGet200ResponseFieldsItemTextRef $ref;

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
     * @var value-of<DocFormsGet200ResponseFieldsItemTextOrigin> $origin
     */
    #[JsonProperty('origin')]
    public string $origin;

    /**
     * @var DocFormsGet200ResponseFieldsItemTextFlags $flags
     */
    #[JsonProperty('flags')]
    public DocFormsGet200ResponseFieldsItemTextFlags $flags;

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
     * @var DocFormsGet200ResponseFieldsItemTextValueEntry $valueEntry
     */
    #[JsonProperty('valueEntry')]
    public DocFormsGet200ResponseFieldsItemTextValueEntry $valueEntry;

    /**
     * @var DocFormsGet200ResponseFieldsItemTextDefaultValueEntry $defaultValueEntry
     */
    #[JsonProperty('defaultValueEntry')]
    public DocFormsGet200ResponseFieldsItemTextDefaultValueEntry $defaultValueEntry;

    /**
     * @var ?DocFormsGet200ResponseFieldsItemTextActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocFormsGet200ResponseFieldsItemTextActions $actions;

    /**
     * @var array<DocFormsGet200ResponseFieldsItemTextWidgetsItem> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([DocFormsGet200ResponseFieldsItemTextWidgetsItem::class])]
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
     *   ref: DocFormsGet200ResponseFieldsItemTextRef,
     *   fieldObjectNumber: int,
     *   name: string,
     *   origin: value-of<DocFormsGet200ResponseFieldsItemTextOrigin>,
     *   flags: DocFormsGet200ResponseFieldsItemTextFlags,
     *   valueEntry: DocFormsGet200ResponseFieldsItemTextValueEntry,
     *   defaultValueEntry: DocFormsGet200ResponseFieldsItemTextDefaultValueEntry,
     *   widgets: array<DocFormsGet200ResponseFieldsItemTextWidgetsItem>,
     *   value: string,
     *   defaultValue: string,
     *   multiline: bool,
     *   password: bool,
     *   comb: bool,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   actions?: ?DocFormsGet200ResponseFieldsItemTextActions,
     *   maxLength?: ?int,
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
