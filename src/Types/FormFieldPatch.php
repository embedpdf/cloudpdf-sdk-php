<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\Union;
use CloudPDF\Core\Types\ArrayType;

class FormFieldPatch extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?bool $readOnly
     */
    #[JsonProperty('readOnly')]
    public ?bool $readOnly;

    /**
     * @var ?bool $required
     */
    #[JsonProperty('required')]
    public ?bool $required;

    /**
     * @var ?bool $noExport
     */
    #[JsonProperty('noExport')]
    public ?bool $noExport;

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
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?FieldActionsPatch $actions
     */
    #[JsonProperty('actions')]
    public ?FieldActionsPatch $actions;

    /**
     * @var ?value-of<FormFieldPatchFamily> $family
     */
    #[JsonProperty('family')]
    public ?string $family;

    /**
     * @var (
     *    string
     *   |array<string>
     * )|null $defaultValue
     */
    #[JsonProperty('defaultValue'), Union('string', ['string'], 'null')]
    public string|array|null $defaultValue;

    /**
     * @var ?int $maxLength
     */
    #[JsonProperty('maxLength')]
    public ?int $maxLength;

    /**
     * @var ?bool $multiline
     */
    #[JsonProperty('multiline')]
    public ?bool $multiline;

    /**
     * @var ?bool $password
     */
    #[JsonProperty('password')]
    public ?bool $password;

    /**
     * @var ?bool $comb
     */
    #[JsonProperty('comb')]
    public ?bool $comb;

    /**
     * @var ?bool $radiosInUnison
     */
    #[JsonProperty('radiosInUnison')]
    public ?bool $radiosInUnison;

    /**
     * @var ?bool $noToggleToOff
     */
    #[JsonProperty('noToggleToOff')]
    public ?bool $noToggleToOff;

    /**
     * @var ?bool $edit
     */
    #[JsonProperty('edit')]
    public ?bool $edit;

    /**
     * @var ?bool $multiSelect
     */
    #[JsonProperty('multiSelect')]
    public ?bool $multiSelect;

    /**
     * @var ?array<FormFieldPatchOptionsItem> $options
     */
    #[JsonProperty('options'), ArrayType([FormFieldPatchOptionsItem::class])]
    public ?array $options;

    /**
     * @param array{
     *   name?: ?string,
     *   readOnly?: ?bool,
     *   required?: ?bool,
     *   noExport?: ?bool,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   groupId?: ?string,
     *   actions?: ?FieldActionsPatch,
     *   family?: ?value-of<FormFieldPatchFamily>,
     *   defaultValue?: (
     *    string
     *   |array<string>
     * )|null,
     *   maxLength?: ?int,
     *   multiline?: ?bool,
     *   password?: ?bool,
     *   comb?: ?bool,
     *   radiosInUnison?: ?bool,
     *   noToggleToOff?: ?bool,
     *   edit?: ?bool,
     *   multiSelect?: ?bool,
     *   options?: ?array<FormFieldPatchOptionsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->readOnly = $values['readOnly'] ?? null;
        $this->required = $values['required'] ?? null;
        $this->noExport = $values['noExport'] ?? null;
        $this->alternateName = $values['alternateName'] ?? null;
        $this->mappingName = $values['mappingName'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->actions = $values['actions'] ?? null;
        $this->family = $values['family'] ?? null;
        $this->defaultValue = $values['defaultValue'] ?? null;
        $this->maxLength = $values['maxLength'] ?? null;
        $this->multiline = $values['multiline'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->comb = $values['comb'] ?? null;
        $this->radiosInUnison = $values['radiosInUnison'] ?? null;
        $this->noToggleToOff = $values['noToggleToOff'] ?? null;
        $this->edit = $values['edit'] ?? null;
        $this->multiSelect = $values['multiSelect'] ?? null;
        $this->options = $values['options'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
