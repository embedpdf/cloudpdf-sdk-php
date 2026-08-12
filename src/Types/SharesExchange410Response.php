<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesExchange410Response extends JsonSerializableType
{
    /**
     * @var SharesExchange410ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesExchange410ResponseError $error;

    /**
     * @param array{
     *   error: SharesExchange410ResponseError,
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
