<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PageListSnapshotPagesItem extends JsonSerializableType
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
     * @var PageListSnapshotPagesItemSize $size
     */
    #[JsonProperty('size')]
    public PageListSnapshotPagesItemSize $size;

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
     * @var ?value-of<PageListSnapshotPagesItemTabOrder> $tabOrder
     */
    #[JsonProperty('tabOrder')]
    public ?string $tabOrder;

    /**
     * @var PageListSnapshotPagesItemBoxes $boxes
     */
    #[JsonProperty('boxes')]
    public PageListSnapshotPagesItemBoxes $boxes;

    /**
     * @var PageListSnapshotPagesItemPdfCropBox $pdfCropBox
     */
    #[JsonProperty('pdfCropBox')]
    public PageListSnapshotPagesItemPdfCropBox $pdfCropBox;

    /**
     * @var ?PdfPageActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfPageActions $actions;

    /**
     * @var ?array<PageMeasurementViewport> $viewports
     */
    #[JsonProperty('viewports'), ArrayType([PageMeasurementViewport::class])]
    public ?array $viewports;

    /**
     * @param array{
     *   index: int,
     *   ref: PageRef,
     *   size: PageListSnapshotPagesItemSize,
     *   rotation: int,
     *   userUnit: float,
     *   boxes: PageListSnapshotPagesItemBoxes,
     *   pdfCropBox: PageListSnapshotPagesItemPdfCropBox,
     *   label?: ?string,
     *   tabOrder?: ?value-of<PageListSnapshotPagesItemTabOrder>,
     *   actions?: ?PdfPageActions,
     *   viewports?: ?array<PageMeasurementViewport>,
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
        $this->viewports = $values['viewports'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
