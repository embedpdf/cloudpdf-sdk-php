<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetNameResponseLayoutPagesItem extends JsonSerializableType
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
     * @var DocPagesSetNameResponseLayoutPagesItemSize $size
     */
    #[JsonProperty('size')]
    public DocPagesSetNameResponseLayoutPagesItemSize $size;

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
     * @var ?value-of<DocPagesSetNameResponseLayoutPagesItemTabOrder> $tabOrder
     */
    #[JsonProperty('tabOrder')]
    public ?string $tabOrder;

    /**
     * @var DocPagesSetNameResponseLayoutPagesItemBoxes $boxes
     */
    #[JsonProperty('boxes')]
    public DocPagesSetNameResponseLayoutPagesItemBoxes $boxes;

    /**
     * @var DocPagesSetNameResponseLayoutPagesItemPdfCropBox $pdfCropBox
     */
    #[JsonProperty('pdfCropBox')]
    public DocPagesSetNameResponseLayoutPagesItemPdfCropBox $pdfCropBox;

    /**
     * @var ?PdfPageActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfPageActions $actions;

    /**
     * @param array{
     *   index: int,
     *   ref: PageRef,
     *   size: DocPagesSetNameResponseLayoutPagesItemSize,
     *   rotation: int,
     *   userUnit: float,
     *   boxes: DocPagesSetNameResponseLayoutPagesItemBoxes,
     *   pdfCropBox: DocPagesSetNameResponseLayoutPagesItemPdfCropBox,
     *   label?: ?string,
     *   tabOrder?: ?value-of<DocPagesSetNameResponseLayoutPagesItemTabOrder>,
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
