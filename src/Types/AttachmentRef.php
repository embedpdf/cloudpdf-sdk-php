<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class AttachmentRef extends JsonSerializableType
{
    /**
     * @var value-of<AttachmentRefKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @param array{
     *   kind: value-of<AttachmentRefKind>,
     *   key: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->key = $values['key'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
