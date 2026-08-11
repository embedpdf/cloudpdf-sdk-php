<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesCreate400Response extends JsonSerializableType
{
    /**
     * @var SharesCreate400ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesCreate400ResponseError $error;

    /**
     * @param array{
     *   error: SharesCreate400ResponseError,
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
