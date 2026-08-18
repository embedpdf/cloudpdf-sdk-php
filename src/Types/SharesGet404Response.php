<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesGet404Response extends JsonSerializableType
{
    /**
     * @var SharesGet404ResponseError $error
     */
    #[JsonProperty('error')]
    public SharesGet404ResponseError $error;

    /**
     * @param array{
     *   error: SharesGet404ResponseError,
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
