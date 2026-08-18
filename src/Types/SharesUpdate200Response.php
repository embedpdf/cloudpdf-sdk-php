<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesUpdate200Response extends JsonSerializableType
{
    /**
     * @var SharesUpdate200ResponseShare $share
     */
    #[JsonProperty('share')]
    public SharesUpdate200ResponseShare $share;

    /**
     * @param array{
     *   share: SharesUpdate200ResponseShare,
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
