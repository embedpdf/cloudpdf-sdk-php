<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesListResponseSignaturesItem extends JsonSerializableType
{
    /**
     * @var int $index
     */
    #[JsonProperty('index')]
    public int $index;

    /**
     * @var FormFieldRef $field
     */
    #[JsonProperty('field')]
    public FormFieldRef $field;

    /**
     * @var string $fieldName
     */
    #[JsonProperty('fieldName')]
    public string $fieldName;

    /**
     * @var ?FormWidget $widget
     */
    #[JsonProperty('widget')]
    public ?FormWidget $widget;

    /**
     * @var bool $signed
     */
    #[JsonProperty('signed')]
    public bool $signed;

    /**
     * @var value-of<DocSignaturesListResponseSignaturesItemKind> $kind
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
     * @var int $contentsSizeBytes
     */
    #[JsonProperty('contentsSizeBytes')]
    public int $contentsSizeBytes;

    /**
     * @var ?value-of<DocSignaturesListResponseSignaturesItemCoverage> $coverage
     */
    #[JsonProperty('coverage')]
    public ?string $coverage;

    /**
     * @var ?int $revisionIndex
     */
    #[JsonProperty('revisionIndex')]
    public ?int $revisionIndex;

    /**
     * @var DocSignaturesListResponseSignaturesItemSigner $signer
     */
    #[JsonProperty('signer')]
    public DocSignaturesListResponseSignaturesItemSigner $signer;

    /**
     * @var ?int $docMdp
     */
    #[JsonProperty('docMdp')]
    public ?int $docMdp;

    /**
     * @var bool $catalogCertification
     */
    #[JsonProperty('catalogCertification')]
    public bool $catalogCertification;

    /**
     * @var ?FieldLockSpec $fieldMdp
     */
    #[JsonProperty('fieldMdp')]
    public ?FieldLockSpec $fieldMdp;

    /**
     * @var ?FieldLockSpec $lock
     */
    #[JsonProperty('lock')]
    public ?FieldLockSpec $lock;

    /**
     * @var ?DocSignaturesListResponseSignaturesItemSeedValue $seedValue
     */
    #[JsonProperty('seedValue')]
    public ?DocSignaturesListResponseSignaturesItemSeedValue $seedValue;

    /**
     * @param array{
     *   index: int,
     *   field: FormFieldRef,
     *   fieldName: string,
     *   signed: bool,
     *   kind: value-of<DocSignaturesListResponseSignaturesItemKind>,
     *   contentsSizeBytes: int,
     *   signer: DocSignaturesListResponseSignaturesItemSigner,
     *   catalogCertification: bool,
     *   widget?: ?FormWidget,
     *   filter?: ?string,
     *   subFilter?: ?string,
     *   byteRange?: ?array<mixed>,
     *   coverage?: ?value-of<DocSignaturesListResponseSignaturesItemCoverage>,
     *   revisionIndex?: ?int,
     *   docMdp?: ?int,
     *   fieldMdp?: ?FieldLockSpec,
     *   lock?: ?FieldLockSpec,
     *   seedValue?: ?DocSignaturesListResponseSignaturesItemSeedValue,
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
        $this->contentsSizeBytes = $values['contentsSizeBytes'];
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
