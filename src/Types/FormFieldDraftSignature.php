<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FormFieldDraftSignature extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

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
     * @var ?array<WidgetPlacement> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([WidgetPlacement::class])]
    public ?array $widgets;

    /**
     * @param array{
     *   name: string,
     *   readOnly?: ?bool,
     *   required?: ?bool,
     *   noExport?: ?bool,
     *   alternateName?: ?string,
     *   mappingName?: ?string,
     *   groupId?: ?string,
     *   actions?: ?FieldActionsPatch,
     *   widgets?: ?array<WidgetPlacement>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->readOnly = $values['readOnly'] ?? null;
        $this->required = $values['required'] ?? null;
        $this->noExport = $values['noExport'] ?? null;
        $this->alternateName = $values['alternateName'] ?? null;
        $this->mappingName = $values['mappingName'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->actions = $values['actions'] ?? null;
        $this->widgets = $values['widgets'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
