<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpFormsSetSignatureAppearanceResources extends JsonSerializableType
{
    /**
     * @var string $appearance
     */
    #[JsonProperty('appearance')]
    public string $appearance;

    /**
     * @param array{
     *   appearance: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->appearance = $values['appearance'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
