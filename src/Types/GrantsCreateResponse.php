<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsCreateResponse extends JsonSerializableType
{
    /**
     * @var GrantsCreateResponseGrant $grant
     */
    #[JsonProperty('grant')]
    public GrantsCreateResponseGrant $grant;

    /**
     * @param array{
     *   grant: GrantsCreateResponseGrant,
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
