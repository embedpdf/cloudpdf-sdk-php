<?php

namespace CloudPDF\Documents\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsImportFromRequestSourceConnection extends JsonSerializableType
{
    /**
     * @var string $connectionId
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var ?string $revision
     */
    #[JsonProperty('revision')]
    public ?string $revision;

    /**
     * @param array{
     *   connectionId: string,
     *   key: string,
     *   revision?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->connectionId = $values['connectionId'];
        $this->key = $values['key'];
        $this->revision = $values['revision'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
