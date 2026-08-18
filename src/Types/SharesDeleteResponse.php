<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesDeleteResponse extends JsonSerializableType
{
    /**
     * @var SharesDeleteResponseError $error
     */
    #[JsonProperty('error')]
    public SharesDeleteResponseError $error;

    /**
     * @param array{
     *   error: SharesDeleteResponseError,
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
