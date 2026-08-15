<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesUpdate400Response extends JsonSerializableType
{
    /**
     * @var SharesUpdate400ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesUpdate400ResponseError $error;

    /**
     * @param array{
     *   error: SharesUpdate400ResponseError,
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
