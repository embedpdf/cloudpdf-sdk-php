<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsGetResponse extends JsonSerializableType
{
    /**
     * @var GrantsGetResponseGrant $grant
     */
    #[JsonProperty('grant')]
    public GrantsGetResponseGrant $grant;

    /**
     * @param array{
     *   grant: GrantsGetResponseGrant,
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
