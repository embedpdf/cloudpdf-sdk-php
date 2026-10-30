<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsGet200Response extends JsonSerializableType
{
    /**
     * @var GrantsGet200ResponseGrant $grant
     */
    #[JsonProperty('grant')]
    public GrantsGet200ResponseGrant $grant;

    /**
     * @param array{
     *   grant: GrantsGet200ResponseGrant,
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
