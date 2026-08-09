<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Core\Types\Union;

class DocFormsGet200Response extends JsonSerializableType
{
    /**
     * @var value-of<DocFormsGet200ResponseFormKind> $formKind
     */
    #[JsonProperty('formKind')]
    public string $formKind;

    /**
     * @var bool $needsAppearances
     */
    #[JsonProperty('needsAppearances')]
    public bool $needsAppearances;

    /**
     * @var array<DocFormsGet200ResponseFieldsItem> $fields
     */
    #[JsonProperty('fields'), ArrayType([DocFormsGet200ResponseFieldsItem::class])]
    public array $fields;

    /**
     * @var array<?DocFormsGet200ResponseCalculationOrderItem> $calculationOrder
     */
    #[JsonProperty('calculationOrder'), ArrayType([new Union(DocFormsGet200ResponseCalculationOrderItem::class, 'null')])]
    public array $calculationOrder;

    /**
     * @param array{
     *   formKind: value-of<DocFormsGet200ResponseFormKind>,
     *   needsAppearances: bool,
     *   fields: array<DocFormsGet200ResponseFieldsItem>,
     *   calculationOrder: array<?DocFormsGet200ResponseCalculationOrderItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->formKind = $values['formKind'];
        $this->needsAppearances = $values['needsAppearances'];
        $this->fields = $values['fields'];
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
