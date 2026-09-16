<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsSignatures200ResponseSignaturesItem extends JsonSerializableType
{
    /**
     * @var int $index
     */
    #[JsonProperty('index')]
    public int $index;

    /**
     * @var DocVersionsSignatures200ResponseSignaturesItemField $field
     */
    #[JsonProperty('field')]
    public DocVersionsSignatures200ResponseSignaturesItemField $field;

    /**
     * @var string $fieldName
     */
    #[JsonProperty('fieldName')]
    public string $fieldName;

    /**
     * @var ?DocVersionsSignatures200ResponseSignaturesItemWidget $widget
     */
    #[JsonProperty('widget')]
    public ?DocVersionsSignatures200ResponseSignaturesItemWidget $widget;

    /**
     * @var bool $signed
     */
    #[JsonProperty('signed')]
    public bool $signed;

    /**
     * @var value-of<DocVersionsSignatures200ResponseSignaturesItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?string $filter
     */
    #[JsonProperty('filter')]
    public ?string $filter;

    /**
     * @var ?string $subFilter
     */
    #[JsonProperty('subFilter')]
    public ?string $subFilter;

    /**
     * @var ?array<mixed> $byteRange
     */
    #[JsonProperty('byteRange'), ArrayType(['mixed'])]
    public ?array $byteRange;

    /**
     * @var int $contentsSize
     */
    #[JsonProperty('contentsSize')]
    public int $contentsSize;

    /**
     * @var ?value-of<DocVersionsSignatures200ResponseSignaturesItemCoverage> $coverage
     */
    #[JsonProperty('coverage')]
    public ?string $coverage;

    /**
     * @var ?int $revisionIndex
     */
    #[JsonProperty('revisionIndex')]
    public ?int $revisionIndex;

    /**
     * @var DocVersionsSignatures200ResponseSignaturesItemSigner $signer
     */
    #[JsonProperty('signer')]
    public DocVersionsSignatures200ResponseSignaturesItemSigner $signer;

    /**
     * @var ?float $docMdp
     */
    #[JsonProperty('docMdp')]
    public ?float $docMdp;

    /**
     * @var bool $catalogCertification
     */
    #[JsonProperty('catalogCertification')]
    public bool $catalogCertification;

    /**
     * @var ?DocVersionsSignatures200ResponseSignaturesItemFieldMdp $fieldMdp
     */
    #[JsonProperty('fieldMdp')]
    public ?DocVersionsSignatures200ResponseSignaturesItemFieldMdp $fieldMdp;

    /**
     * @var ?DocVersionsSignatures200ResponseSignaturesItemLock $lock
     */
    #[JsonProperty('lock')]
    public ?DocVersionsSignatures200ResponseSignaturesItemLock $lock;

    /**
     * @var ?DocVersionsSignatures200ResponseSignaturesItemSeedValue $seedValue
     */
    #[JsonProperty('seedValue')]
    public ?DocVersionsSignatures200ResponseSignaturesItemSeedValue $seedValue;

    /**
     * @param array{
     *   index: int,
     *   field: DocVersionsSignatures200ResponseSignaturesItemField,
     *   fieldName: string,
     *   signed: bool,
     *   kind: value-of<DocVersionsSignatures200ResponseSignaturesItemKind>,
     *   contentsSize: int,
     *   signer: DocVersionsSignatures200ResponseSignaturesItemSigner,
     *   catalogCertification: bool,
     *   widget?: ?DocVersionsSignatures200ResponseSignaturesItemWidget,
     *   filter?: ?string,
     *   subFilter?: ?string,
     *   byteRange?: ?array<mixed>,
     *   coverage?: ?value-of<DocVersionsSignatures200ResponseSignaturesItemCoverage>,
     *   revisionIndex?: ?int,
     *   docMdp?: ?float,
     *   fieldMdp?: ?DocVersionsSignatures200ResponseSignaturesItemFieldMdp,
     *   lock?: ?DocVersionsSignatures200ResponseSignaturesItemLock,
     *   seedValue?: ?DocVersionsSignatures200ResponseSignaturesItemSeedValue,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->index = $values['index'];
        $this->field = $values['field'];
        $this->fieldName = $values['fieldName'];
        $this->widget = $values['widget'] ?? null;
        $this->signed = $values['signed'];
        $this->kind = $values['kind'];
        $this->filter = $values['filter'] ?? null;
        $this->subFilter = $values['subFilter'] ?? null;
        $this->byteRange = $values['byteRange'] ?? null;
        $this->contentsSize = $values['contentsSize'];
        $this->coverage = $values['coverage'] ?? null;
        $this->revisionIndex = $values['revisionIndex'] ?? null;
        $this->signer = $values['signer'];
        $this->docMdp = $values['docMdp'] ?? null;
        $this->catalogCertification = $values['catalogCertification'];
        $this->fieldMdp = $values['fieldMdp'] ?? null;
        $this->lock = $values['lock'] ?? null;
        $this->seedValue = $values['seedValue'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
