<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsGet404Response extends JsonSerializableType
{
    /**
     * @var TenantsGet404ResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsGet404ResponseError $error;

    /**
     * @param array{
     *   error: TenantsGet404ResponseError,
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
