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
     * @var ?int $annotationsVersion
     */
    #[JsonProperty('annotationsVersion')]
    public ?int $annotationsVersion;

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
     * @var ?int $layerVersion
     */
    #[JsonProperty('layerVersion')]
    public ?int $layerVersion;

    /**
     * @var ?bool $working
     */
    #[JsonProperty('working')]
    public ?bool $working;

    /**
     * @var ?int $baseByteLength
     */
    #[JsonProperty('baseByteLength')]
    public ?int $baseByteLength;

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
     *   annotationsVersion?: ?int,
     *   layerVersion?: ?int,
     *   working?: ?bool,
     *   baseByteLength?: ?int,
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
        $this->annotationsVersion = $values['annotationsVersion'] ?? null;
        $this->auditHead = $values['auditHead'];
        $this->baseSha = $values['baseSha'];
        $this->layerVersion = $values['layerVersion'] ?? null;
        $this->working = $values['working'] ?? null;
        $this->baseByteLength = $values['baseByteLength'] ?? null;
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
