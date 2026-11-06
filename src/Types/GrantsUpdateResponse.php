<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsUpdateResponse extends JsonSerializableType
{
    /**
     * @var GrantsUpdateResponseGrant $grant
     */
    #[JsonProperty('grant')]
    public GrantsUpdateResponseGrant $grant;

    /**
     * @param array{
     *   grant: GrantsUpdateResponseGrant,
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
