<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsSuspendResponse extends JsonSerializableType
{
    /**
     * @var TenantsSuspendResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsSuspendResponseError $error;

    /**
     * @param array{
     *   error: TenantsSuspendResponseError,
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
