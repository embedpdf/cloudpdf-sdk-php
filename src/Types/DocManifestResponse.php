<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocManifestResponse extends JsonSerializableType
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
     * @var ?int $formsVersion
     */
    #[JsonProperty('formsVersion')]
    public ?int $formsVersion;

    /**
     * @var ?int $outlineVersion
     */
    #[JsonProperty('outlineVersion')]
    public ?int $outlineVersion;

    /**
     * @var ?int $viewportsVersion
     */
    #[JsonProperty('viewportsVersion')]
    public ?int $viewportsVersion;

    /**
     * @var ?int $fontsVersion
     */
    #[JsonProperty('fontsVersion')]
    public ?int $fontsVersion;

    /**
     * @var ?int $contentsVersion
     */
    #[JsonProperty('contentsVersion')]
    public ?int $contentsVersion;

    /**
     * @var int $auditHead
     */
    #[JsonProperty('auditHead')]
    public int $auditHead;

    /**
     * @var string $baseSha256
     */
    #[JsonProperty('baseSha256')]
    public string $baseSha256;

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
     * @var ?int $baseSizeBytes
     */
    #[JsonProperty('baseSizeBytes')]
    public ?int $baseSizeBytes;

    /**
     * @var ?DocManifestResponseScopes $scopes
     */
    #[JsonProperty('scopes')]
    public ?DocManifestResponseScopes $scopes;

    /**
     * @var ?DocManifestResponseProtection $protection
     */
    #[JsonProperty('protection')]
    public ?DocManifestResponseProtection $protection;

    /**
     * @var array<DocManifestResponsePagesItem> $pages
     */
    #[JsonProperty('pages'), ArrayType([DocManifestResponsePagesItem::class])]
    public array $pages;

    /**
     * @param array{
     *   docVersion: int,
     *   layoutVersion: int,
     *   metadataVersion: int,
     *   auditHead: int,
     *   baseSha256: string,
     *   pages: array<DocManifestResponsePagesItem>,
     *   actionsVersion?: ?int,
     *   attachmentsVersion?: ?int,
     *   annotationsVersion?: ?int,
     *   formsVersion?: ?int,
     *   outlineVersion?: ?int,
     *   viewportsVersion?: ?int,
     *   fontsVersion?: ?int,
     *   contentsVersion?: ?int,
     *   layerVersion?: ?int,
     *   working?: ?bool,
     *   baseSizeBytes?: ?int,
     *   scopes?: ?DocManifestResponseScopes,
     *   protection?: ?DocManifestResponseProtection,
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
        $this->formsVersion = $values['formsVersion'] ?? null;
        $this->outlineVersion = $values['outlineVersion'] ?? null;
        $this->viewportsVersion = $values['viewportsVersion'] ?? null;
        $this->fontsVersion = $values['fontsVersion'] ?? null;
        $this->contentsVersion = $values['contentsVersion'] ?? null;
        $this->auditHead = $values['auditHead'];
        $this->baseSha256 = $values['baseSha256'];
        $this->layerVersion = $values['layerVersion'] ?? null;
        $this->working = $values['working'] ?? null;
        $this->baseSizeBytes = $values['baseSizeBytes'] ?? null;
        $this->scopes = $values['scopes'] ?? null;
        $this->protection = $values['protection'] ?? null;
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
