<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesDeleteLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var ChangeItemPagesDeleteLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public ChangeItemPagesDeleteLayoutPagesItemBoxesMedia $media;

    /**
     * @var ChangeItemPagesDeleteLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public ChangeItemPagesDeleteLayoutPagesItemBoxesCrop $crop;

    /**
     * @var ChangeItemPagesDeleteLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public ChangeItemPagesDeleteLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var ChangeItemPagesDeleteLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public ChangeItemPagesDeleteLayoutPagesItemBoxesTrim $trim;

    /**
     * @var ChangeItemPagesDeleteLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public ChangeItemPagesDeleteLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: ChangeItemPagesDeleteLayoutPagesItemBoxesMedia,
     *   crop: ChangeItemPagesDeleteLayoutPagesItemBoxesCrop,
     *   bleed: ChangeItemPagesDeleteLayoutPagesItemBoxesBleed,
     *   trim: ChangeItemPagesDeleteLayoutPagesItemBoxesTrim,
     *   art: ChangeItemPagesDeleteLayoutPagesItemBoxesArt,
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
