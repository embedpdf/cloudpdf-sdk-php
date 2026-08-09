<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsCreate400Response extends JsonSerializableType
{
    /**
     * @var TenantsCreate400ResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsCreate400ResponseError $error;

    /**
     * @param array{
     *   error: TenantsCreate400ResponseError,
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
