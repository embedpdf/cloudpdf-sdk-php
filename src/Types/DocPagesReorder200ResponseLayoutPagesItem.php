<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesReorder200ResponseLayoutPagesItem extends JsonSerializableType
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
     * @var DocPagesReorder200ResponseLayoutPagesItemSize $size
     */
    #[JsonProperty('size')]
    public DocPagesReorder200ResponseLayoutPagesItemSize $size;

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
     * @var ?value-of<DocPagesReorder200ResponseLayoutPagesItemTabOrder> $tabOrder
     */
    #[JsonProperty('tabOrder')]
    public ?string $tabOrder;

    /**
     * @var DocPagesReorder200ResponseLayoutPagesItemBoxes $boxes
     */
    #[JsonProperty('boxes')]
    public DocPagesReorder200ResponseLayoutPagesItemBoxes $boxes;

    /**
     * @var DocPagesReorder200ResponseLayoutPagesItemPdfCropBox $pdfCropBox
     */
    #[JsonProperty('pdfCropBox')]
    public DocPagesReorder200ResponseLayoutPagesItemPdfCropBox $pdfCropBox;

    /**
     * @var ?PdfPageActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfPageActions $actions;

    /**
     * @param array{
     *   index: int,
     *   ref: PageRef,
     *   size: DocPagesReorder200ResponseLayoutPagesItemSize,
     *   rotation: float,
     *   userUnit: float,
     *   boxes: DocPagesReorder200ResponseLayoutPagesItemBoxes,
     *   pdfCropBox: DocPagesReorder200ResponseLayoutPagesItemPdfCropBox,
     *   label?: ?string,
     *   tabOrder?: ?value-of<DocPagesReorder200ResponseLayoutPagesItemTabOrder>,
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
