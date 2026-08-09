<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AdminErrorPayload extends JsonSerializableType
{
    /**
     * @var AdminErrorPayloadError $error
     */
    #[JsonProperty('error')]
    public AdminErrorPayloadError $error;

    /**
     * @param array{
     *   error: AdminErrorPayloadError,
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
