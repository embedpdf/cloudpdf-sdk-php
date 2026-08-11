<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesUpdate404Response extends JsonSerializableType
{
    /**
     * @var SharesUpdate404ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesUpdate404ResponseError $error;

    /**
     * @param array{
     *   error: SharesUpdate404ResponseError,
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
