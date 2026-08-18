<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesGet200Response extends JsonSerializableType
{
    /**
     * @var SharesGet200ResponseShare $share
     */
    #[JsonProperty('share')]
    public SharesGet200ResponseShare $share;

    /**
     * @param array{
     *   share: SharesGet200ResponseShare,
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
