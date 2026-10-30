<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsArchive200Response extends JsonSerializableType
{
    /**
     * @var GrantsArchive200ResponseGrant $grant
     */
    #[JsonProperty('grant')]
    public GrantsArchive200ResponseGrant $grant;

    /**
     * @param array{
     *   grant: GrantsArchive200ResponseGrant,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->grant = $values['grant'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
