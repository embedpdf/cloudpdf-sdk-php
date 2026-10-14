<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Core\Types\Union;

class DocFormsList200Response extends JsonSerializableType
{
    /**
     * @var value-of<DocFormsList200ResponseFormKind> $formKind
     */
    #[JsonProperty('formKind')]
    public string $formKind;

    /**
     * @var bool $needsAppearances
     */
    #[JsonProperty('needsAppearances')]
    public bool $needsAppearances;

    /**
     * @var array<FormField> $fields
     */
    #[JsonProperty('fields'), ArrayType([FormField::class])]
    public array $fields;

    /**
     * @var array<WidgetAnnotation> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([WidgetAnnotation::class])]
    public array $widgets;

    /**
     * @var array<?FormFieldRef> $calculationOrder
     */
    #[JsonProperty('calculationOrder'), ArrayType([new Union(FormFieldRef::class, 'null')])]
    public array $calculationOrder;

    /**
     * @param array{
     *   formKind: value-of<DocFormsList200ResponseFormKind>,
     *   needsAppearances: bool,
     *   fields: array<FormField>,
     *   widgets: array<WidgetAnnotation>,
     *   calculationOrder: array<?FormFieldRef>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->formKind = $values['formKind'];
        $this->needsAppearances = $values['needsAppearances'];
        $this->fields = $values['fields'];
        $this->widgets = $values['widgets'];
        $this->calculationOrder = $values['calculationOrder'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
