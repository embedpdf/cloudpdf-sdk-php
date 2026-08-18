<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesCreate404Response extends JsonSerializableType
{
    /**
     * @var SharesCreate404ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesCreate404ResponseError $error;

    /**
     * @param array{
     *   error: SharesCreate404ResponseError,
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
