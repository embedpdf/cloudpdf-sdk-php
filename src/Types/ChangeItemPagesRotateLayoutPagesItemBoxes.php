<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesRotateLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var ChangeItemPagesRotateLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public ChangeItemPagesRotateLayoutPagesItemBoxesMedia $media;

    /**
     * @var ChangeItemPagesRotateLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public ChangeItemPagesRotateLayoutPagesItemBoxesCrop $crop;

    /**
     * @var ChangeItemPagesRotateLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public ChangeItemPagesRotateLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var ChangeItemPagesRotateLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public ChangeItemPagesRotateLayoutPagesItemBoxesTrim $trim;

    /**
     * @var ChangeItemPagesRotateLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public ChangeItemPagesRotateLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: ChangeItemPagesRotateLayoutPagesItemBoxesMedia,
     *   crop: ChangeItemPagesRotateLayoutPagesItemBoxesCrop,
     *   bleed: ChangeItemPagesRotateLayoutPagesItemBoxesBleed,
     *   trim: ChangeItemPagesRotateLayoutPagesItemBoxesTrim,
     *   art: ChangeItemPagesRotateLayoutPagesItemBoxesArt,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->media = $values['media'];
        $this->crop = $values['crop'];
        $this->bleed = $values['bleed'];
        $this->trim = $values['trim'];
        $this->art = $values['art'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
