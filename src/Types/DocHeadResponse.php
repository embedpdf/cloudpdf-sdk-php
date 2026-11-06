<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocHeadResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $baseSha256
     */
    #[JsonProperty('baseSha256')]
    public string $baseSha256;

    /**
     * @var int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public int $sizeBytes;

    /**
     * @var int $docVersion
     */
    #[JsonProperty('docVersion')]
    public int $docVersion;

    /**
     * @var value-of<DocHeadResponseState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var DocHeadResponseEncryption $encryption
     */
    #[JsonProperty('encryption')]
    public DocHeadResponseEncryption $encryption;

    /**
     * @var DocHeadResponsePermissions $permissions
     */
    #[JsonProperty('permissions')]
    public DocHeadResponsePermissions $permissions;

    /**
     * @var DocHeadResponseAccess $access
     */
    #[JsonProperty('access')]
    public DocHeadResponseAccess $access;

    /**
     * @var array<string, string> $engine
     */
    #[JsonProperty('engine'), ArrayType(['string' => 'string'])]
    public array $engine;

    /**
     * @param array{
     *   id: string,
     *   baseSha256: string,
     *   sizeBytes: int,
     *   docVersion: int,
     *   state: value-of<DocHeadResponseState>,
     *   encryption: DocHeadResponseEncryption,
     *   permissions: DocHeadResponsePermissions,
     *   access: DocHeadResponseAccess,
     *   engine: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->baseSha256 = $values['baseSha256'];
        $this->sizeBytes = $values['sizeBytes'];
        $this->docVersion = $values['docVersion'];
        $this->state = $values['state'];
        $this->encryption = $values['encryption'];
        $this->permissions = $values['permissions'];
        $this->access = $values['access'];
        $this->engine = $values['engine'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
