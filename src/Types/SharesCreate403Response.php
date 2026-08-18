<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesCreate403Response extends JsonSerializableType
{
    /**
     * @var SharesCreate403ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesCreate403ResponseError $error;

    /**
     * @param array{
     *   error: SharesCreate403ResponseError,
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
