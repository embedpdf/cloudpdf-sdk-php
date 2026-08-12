<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesCreate200Response extends JsonSerializableType
{
    /**
     * @var SharesCreate200ResponseShare $share
     */
    #[JsonProperty('share')]
    public SharesCreate200ResponseShare $share;

    /**
     * @param array{
     *   share: SharesCreate200ResponseShare,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->share = $values['share'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
