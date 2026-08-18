<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsUsage404Response extends JsonSerializableType
{
    /**
     * @var TenantsUsage404ResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsUsage404ResponseError $error;

    /**
     * @param array{
     *   error: TenantsUsage404ResponseError,
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
