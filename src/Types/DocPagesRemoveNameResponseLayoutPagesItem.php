<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesRemoveNameResponseLayoutPagesItem extends JsonSerializableType
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
     * @var DocPagesRemoveNameResponseLayoutPagesItemSize $size
     */
    #[JsonProperty('size')]
    public DocPagesRemoveNameResponseLayoutPagesItemSize $size;

    /**
     * @var int $rotation
     */
    #[JsonProperty('rotation')]
    public int $rotation;

    /**
     * @var float $userUnit
     */
    #[JsonProperty('userUnit')]
    public float $userUnit;

    /**
     * @var ?value-of<DocPagesRemoveNameResponseLayoutPagesItemTabOrder> $tabOrder
     */
    #[JsonProperty('tabOrder')]
    public ?string $tabOrder;

    /**
     * @var DocPagesRemoveNameResponseLayoutPagesItemBoxes $boxes
     */
    #[JsonProperty('boxes')]
    public DocPagesRemoveNameResponseLayoutPagesItemBoxes $boxes;

    /**
     * @var DocPagesRemoveNameResponseLayoutPagesItemPdfCropBox $pdfCropBox
     */
    #[JsonProperty('pdfCropBox')]
    public DocPagesRemoveNameResponseLayoutPagesItemPdfCropBox $pdfCropBox;

    /**
     * @var ?PdfPageActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfPageActions $actions;

    /**
     * @param array{
     *   index: int,
     *   ref: PageRef,
     *   size: DocPagesRemoveNameResponseLayoutPagesItemSize,
     *   rotation: int,
     *   userUnit: float,
     *   boxes: DocPagesRemoveNameResponseLayoutPagesItemBoxes,
     *   pdfCropBox: DocPagesRemoveNameResponseLayoutPagesItemPdfCropBox,
     *   label?: ?string,
     *   tabOrder?: ?value-of<DocPagesRemoveNameResponseLayoutPagesItemTabOrder>,
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
