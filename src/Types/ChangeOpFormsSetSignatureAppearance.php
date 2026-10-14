<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpFormsSetSignatureAppearance extends JsonSerializableType
{
    /**
     * @var FormFieldRef $field
     */
    #[JsonProperty('field')]
    public FormFieldRef $field;

    /**
     * @var ChangeOpFormsSetSignatureAppearanceResources $resources
     */
    #[JsonProperty('resources')]
    public ChangeOpFormsSetSignatureAppearanceResources $resources;

    /**
     * @param array{
     *   field: FormFieldRef,
     *   resources: ChangeOpFormsSetSignatureAppearanceResources,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->resources = $values['resources'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
