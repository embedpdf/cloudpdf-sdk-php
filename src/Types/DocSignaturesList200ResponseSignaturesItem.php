<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesList200ResponseSignaturesItem extends JsonSerializableType
{
    /**
     * @var int $index
     */
    #[JsonProperty('index')]
    public int $index;

    /**
     * @var DocSignaturesList200ResponseSignaturesItemField $field
     */
    #[JsonProperty('field')]
    public DocSignaturesList200ResponseSignaturesItemField $field;

    /**
     * @var string $fieldName
     */
    #[JsonProperty('fieldName')]
    public string $fieldName;

    /**
     * @var ?DocSignaturesList200ResponseSignaturesItemWidget $widget
     */
    #[JsonProperty('widget')]
    public ?DocSignaturesList200ResponseSignaturesItemWidget $widget;

    /**
     * @var bool $signed
     */
    #[JsonProperty('signed')]
    public bool $signed;

    /**
     * @var value-of<DocSignaturesList200ResponseSignaturesItemKind> $kind
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
     * @var ?value-of<DocSignaturesList200ResponseSignaturesItemCoverage> $coverage
     */
    #[JsonProperty('coverage')]
    public ?string $coverage;

    /**
     * @var ?int $revisionIndex
     */
    #[JsonProperty('revisionIndex')]
    public ?int $revisionIndex;

    /**
     * @var DocSignaturesList200ResponseSignaturesItemSigner $signer
     */
    #[JsonProperty('signer')]
    public DocSignaturesList200ResponseSignaturesItemSigner $signer;

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
     * @var ?DocSignaturesList200ResponseSignaturesItemFieldMdp $fieldMdp
     */
    #[JsonProperty('fieldMdp')]
    public ?DocSignaturesList200ResponseSignaturesItemFieldMdp $fieldMdp;

    /**
     * @var ?DocSignaturesList200ResponseSignaturesItemLock $lock
     */
    #[JsonProperty('lock')]
    public ?DocSignaturesList200ResponseSignaturesItemLock $lock;

    /**
     * @var ?DocSignaturesList200ResponseSignaturesItemSeedValue $seedValue
     */
    #[JsonProperty('seedValue')]
    public ?DocSignaturesList200ResponseSignaturesItemSeedValue $seedValue;

    /**
     * @param array{
     *   index: int,
     *   field: DocSignaturesList200ResponseSignaturesItemField,
     *   fieldName: string,
     *   signed: bool,
     *   kind: value-of<DocSignaturesList200ResponseSignaturesItemKind>,
     *   contentsSize: int,
     *   signer: DocSignaturesList200ResponseSignaturesItemSigner,
     *   catalogCertification: bool,
     *   widget?: ?DocSignaturesList200ResponseSignaturesItemWidget,
     *   filter?: ?string,
     *   subFilter?: ?string,
     *   byteRange?: ?array<mixed>,
     *   coverage?: ?value-of<DocSignaturesList200ResponseSignaturesItemCoverage>,
     *   revisionIndex?: ?int,
     *   docMdp?: ?float,
     *   fieldMdp?: ?DocSignaturesList200ResponseSignaturesItemFieldMdp,
     *   lock?: ?DocSignaturesList200ResponseSignaturesItemLock,
     *   seedValue?: ?DocSignaturesList200ResponseSignaturesItemSeedValue,
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
