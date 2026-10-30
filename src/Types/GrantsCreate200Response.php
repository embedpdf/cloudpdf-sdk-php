<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsCreate200Response extends JsonSerializableType
{
    /**
     * @var GrantsCreate200ResponseGrant $grant
     */
    #[JsonProperty('grant')]
    public GrantsCreate200ResponseGrant $grant;

    /**
     * @param array{
     *   grant: GrantsCreate200ResponseGrant,
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
