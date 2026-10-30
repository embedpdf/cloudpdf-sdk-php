<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsUpdate200Response extends JsonSerializableType
{
    /**
     * @var GrantsUpdate200ResponseGrant $grant
     */
    #[JsonProperty('grant')]
    public GrantsUpdate200ResponseGrant $grant;

    /**
     * @param array{
     *   grant: GrantsUpdate200ResponseGrant,
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
