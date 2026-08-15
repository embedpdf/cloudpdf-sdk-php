<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class TenantsResumeResponse extends JsonSerializableType
{
    /**
     * @var TenantsResumeResponseError $error
     */
    #[JsonProperty('error')]
    public TenantsResumeResponseError $error;

    /**
     * @param array{
     *   error: TenantsResumeResponseError,
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
