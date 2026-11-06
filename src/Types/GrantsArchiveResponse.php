<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class GrantsArchiveResponse extends JsonSerializableType
{
    /**
     * @var GrantsArchiveResponseGrant $grant
     */
    #[JsonProperty('grant')]
    public GrantsArchiveResponseGrant $grant;

    /**
     * @param array{
     *   grant: GrantsArchiveResponseGrant,
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
