<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocHead200Response extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $baseSha
     */
    #[JsonProperty('baseSha')]
    public string $baseSha;

    /**
     * @var int $storageSizeBytes
     */
    #[JsonProperty('storageSizeBytes')]
    public int $storageSizeBytes;

    /**
     * @var int $docVersion
     */
    #[JsonProperty('docVersion')]
    public int $docVersion;

    /**
     * @var value-of<DocHead200ResponseState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var DocHead200ResponseEncryption $encryption
     */
    #[JsonProperty('encryption')]
    public DocHead200ResponseEncryption $encryption;

    /**
     * @var DocHead200ResponsePermissions $permissions
     */
    #[JsonProperty('permissions')]
    public DocHead200ResponsePermissions $permissions;

    /**
     * @var DocHead200ResponseAccess $access
     */
    #[JsonProperty('access')]
    public DocHead200ResponseAccess $access;

    /**
     * @param array{
     *   id: string,
     *   baseSha: string,
     *   storageSizeBytes: int,
     *   docVersion: int,
     *   state: value-of<DocHead200ResponseState>,
     *   encryption: DocHead200ResponseEncryption,
     *   permissions: DocHead200ResponsePermissions,
     *   access: DocHead200ResponseAccess,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->baseSha = $values['baseSha'];
        $this->storageSizeBytes = $values['storageSizeBytes'];
        $this->docVersion = $values['docVersion'];
        $this->state = $values['state'];
        $this->encryption = $values['encryption'];
        $this->permissions = $values['permissions'];
        $this->access = $values['access'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
