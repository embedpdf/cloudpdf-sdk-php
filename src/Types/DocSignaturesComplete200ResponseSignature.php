<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesComplete200ResponseSignature extends JsonSerializableType
{
    /**
     * @var int $index
     */
    #[JsonProperty('index')]
    public int $index;

    /**
     * @var DocSignaturesComplete200ResponseSignatureField $field
     */
    #[JsonProperty('field')]
    public DocSignaturesComplete200ResponseSignatureField $field;

    /**
     * @var string $fieldName
     */
    #[JsonProperty('fieldName')]
    public string $fieldName;

    /**
     * @var ?DocSignaturesComplete200ResponseSignatureWidget $widget
     */
    #[JsonProperty('widget')]
    public ?DocSignaturesComplete200ResponseSignatureWidget $widget;

    /**
     * @var bool $signed
     */
    #[JsonProperty('signed')]
    public bool $signed;

    /**
     * @var value-of<DocSignaturesComplete200ResponseSignatureKind> $kind
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
     * @var ?value-of<DocSignaturesComplete200ResponseSignatureCoverage> $coverage
     */
    #[JsonProperty('coverage')]
    public ?string $coverage;

    /**
     * @var ?int $revisionIndex
     */
    #[JsonProperty('revisionIndex')]
    public ?int $revisionIndex;

    /**
     * @var DocSignaturesComplete200ResponseSignatureSigner $signer
     */
    #[JsonProperty('signer')]
    public DocSignaturesComplete200ResponseSignatureSigner $signer;

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
     * @var ?DocSignaturesComplete200ResponseSignatureFieldMdp $fieldMdp
     */
    #[JsonProperty('fieldMdp')]
    public ?DocSignaturesComplete200ResponseSignatureFieldMdp $fieldMdp;

    /**
     * @var ?DocSignaturesComplete200ResponseSignatureLock $lock
     */
    #[JsonProperty('lock')]
    public ?DocSignaturesComplete200ResponseSignatureLock $lock;

    /**
     * @var ?DocSignaturesComplete200ResponseSignatureSeedValue $seedValue
     */
    #[JsonProperty('seedValue')]
    public ?DocSignaturesComplete200ResponseSignatureSeedValue $seedValue;

    /**
     * @param array{
     *   index: int,
     *   field: DocSignaturesComplete200ResponseSignatureField,
     *   fieldName: string,
     *   signed: bool,
     *   kind: value-of<DocSignaturesComplete200ResponseSignatureKind>,
     *   contentsSize: int,
     *   signer: DocSignaturesComplete200ResponseSignatureSigner,
     *   catalogCertification: bool,
     *   widget?: ?DocSignaturesComplete200ResponseSignatureWidget,
     *   filter?: ?string,
     *   subFilter?: ?string,
     *   byteRange?: ?array<mixed>,
     *   coverage?: ?value-of<DocSignaturesComplete200ResponseSignatureCoverage>,
     *   revisionIndex?: ?int,
     *   docMdp?: ?float,
     *   fieldMdp?: ?DocSignaturesComplete200ResponseSignatureFieldMdp,
     *   lock?: ?DocSignaturesComplete200ResponseSignatureLock,
     *   seedValue?: ?DocSignaturesComplete200ResponseSignatureSeedValue,
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
