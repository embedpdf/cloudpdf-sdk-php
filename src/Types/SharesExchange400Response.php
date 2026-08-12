<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesExchange400Response extends JsonSerializableType
{
    /**
     * @var SharesExchange400ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesExchange400ResponseError $error;

    /**
     * @param array{
     *   error: SharesExchange400ResponseError,
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
