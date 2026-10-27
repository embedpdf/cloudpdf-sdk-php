<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class SharesArchive200Response extends JsonSerializableType
{
    /**
     * @var SharesArchive200ResponseShare $share
     */
    #[JsonProperty('share')]
    public SharesArchive200ResponseShare $share;

    /**
     * @param array{
     *   share: SharesArchive200ResponseShare,
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
