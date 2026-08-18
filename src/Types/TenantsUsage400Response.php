<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsUsage400Response extends JsonSerializableType
{
    /**
     * @var TenantsUsage400ResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsUsage400ResponseError $error;

    /**
     * @param array{
     *   error: TenantsUsage400ResponseError,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->error = $values['error'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
