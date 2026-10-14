<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesDelete200ResponseLayoutPagesItem extends JsonSerializableType
{
    /**
     * @var int $index
     */
    #[JsonProperty('index')]
    public int $index;

    /**
     * @var PageRef $ref
     */
    #[JsonProperty('ref')]
    public PageRef $ref;

    /**
     * @var ?string $label
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var DocPagesDelete200ResponseLayoutPagesItemSize $size
     */
    #[JsonProperty('size')]
    public DocPagesDelete200ResponseLayoutPagesItemSize $size;

    /**
     * @var float $rotation
     */
    #[JsonProperty('rotation')]
    public float $rotation;

    /**
     * @var float $userUnit
     */
    #[JsonProperty('userUnit')]
    public float $userUnit;

    /**
     * @var ?value-of<DocPagesDelete200ResponseLayoutPagesItemTabOrder> $tabOrder
     */
    #[JsonProperty('tabOrder')]
    public ?string $tabOrder;

    /**
     * @var DocPagesDelete200ResponseLayoutPagesItemBoxes $boxes
     */
    #[JsonProperty('boxes')]
    public DocPagesDelete200ResponseLayoutPagesItemBoxes $boxes;

    /**
     * @var DocPagesDelete200ResponseLayoutPagesItemPdfCropBox $pdfCropBox
     */
    #[JsonProperty('pdfCropBox')]
    public DocPagesDelete200ResponseLayoutPagesItemPdfCropBox $pdfCropBox;

    /**
     * @var ?PdfPageActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfPageActions $actions;

    /**
     * @param array{
     *   index: int,
     *   ref: PageRef,
     *   size: DocPagesDelete200ResponseLayoutPagesItemSize,
     *   rotation: float,
     *   userUnit: float,
     *   boxes: DocPagesDelete200ResponseLayoutPagesItemBoxes,
     *   pdfCropBox: DocPagesDelete200ResponseLayoutPagesItemPdfCropBox,
     *   label?: ?string,
     *   tabOrder?: ?value-of<DocPagesDelete200ResponseLayoutPagesItemTabOrder>,
     *   actions?: ?PdfPageActions,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->index = $values['index'];
        $this->ref = $values['ref'];
        $this->label = $values['label'] ?? null;
        $this->size = $values['size'];
        $this->rotation = $values['rotation'];
        $this->userUnit = $values['userUnit'];
        $this->tabOrder = $values['tabOrder'] ?? null;
        $this->boxes = $values['boxes'];
        $this->pdfCropBox = $values['pdfCropBox'];
        $this->actions = $values['actions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
