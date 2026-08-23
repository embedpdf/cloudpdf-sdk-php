<?php

namespace CloudPDF\Documents\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

/**
 * The operator pre-registered the authority: the request names a connection and a key inside it. Which provider backs the connection (S3, GCS, Azure Blob, filesystem, ...) is deployment configuration, never wire surface.
 */
class DocumentsImportFromRequestSourceConnection extends JsonSerializableType
{
    /**
     * @var string $connectionId The operator-registered storage connection to read from.
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

    /**
     * @var string $key The object key to read, inside the connection's configured scope. At most 1024 UTF-8 bytes.
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var ?string $revision Pins a specific version of the object. Provider-interpreted (S3 VersionId, GCS generation, Azure version id); providers without versioning reject it.
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
