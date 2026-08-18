<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesList400Response extends JsonSerializableType
{
    /**
     * @var SharesList400ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesList400ResponseError $error;

    /**
     * @param array{
     *   error: SharesList400ResponseError,
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
