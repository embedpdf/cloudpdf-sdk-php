<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesExchange403Response extends JsonSerializableType
{
    /**
     * @var SharesExchange403ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesExchange403ResponseError $error;

    /**
     * @param array{
     *   error: SharesExchange403ResponseError,
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
