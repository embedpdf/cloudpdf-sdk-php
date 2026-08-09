<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocManifest200Response extends JsonSerializableType
{
    /**
     * @var int $docVersion
     */
    #[JsonProperty('docVersion')]
    public int $docVersion;

    /**
     * @var int $layoutVersion
     */
    #[JsonProperty('layoutVersion')]
    public int $layoutVersion;

    /**
     * @var int $metadataVersion
     */
    #[JsonProperty('metadataVersion')]
    public int $metadataVersion;

    /**
     * @var ?int $actionsVersion
     */
    #[JsonProperty('actionsVersion')]
    public ?int $actionsVersion;

    /**
     * @var ?int $attachmentsVersion
     */
    #[JsonProperty('attachmentsVersion')]
    public ?int $attachmentsVersion;

    /**
     * @var int $auditHead
     */
    #[JsonProperty('auditHead')]
    public int $auditHead;

    /**
     * @var string $baseSha
     */
    #[JsonProperty('baseSha')]
    public string $baseSha;

    /**
     * @var ?DocManifest200ResponseScopes $scopes
     */
    #[JsonProperty('scopes')]
    public ?DocManifest200ResponseScopes $scopes;

    /**
     * @var array<DocManifest200ResponsePagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocManifest200ResponsePagesItem::class])]
    public array $pages;

    /**
     * @param array{
     *   docVersion: int,
     *   layoutVersion: int,
     *   metadataVersion: int,
     *   auditHead: int,
     *   baseSha: string,
     *   pages: array<DocManifest200ResponsePagesItem>,
     *   actionsVersion?: ?int,
     *   attachmentsVersion?: ?int,
     *   scopes?: ?DocManifest200ResponseScopes,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->docVersion = $values['docVersion'];
        $this->layoutVersion = $values['layoutVersion'];
        $this->metadataVersion = $values['metadataVersion'];
        $this->actionsVersion = $values['actionsVersion'] ?? null;
        $this->attachmentsVersion = $values['attachmentsVersion'] ?? null;
        $this->auditHead = $values['auditHead'];
        $this->baseSha = $values['baseSha'];
        $this->scopes = $values['scopes'] ?? null;
        $this->pages = $values['pages'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
