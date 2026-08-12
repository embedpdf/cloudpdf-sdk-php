<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesExchange422Response extends JsonSerializableType
{
    /**
     * @var SharesExchange422ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesExchange422ResponseError $error;

    /**
     * @param array{
     *   error: SharesExchange422ResponseError,
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
