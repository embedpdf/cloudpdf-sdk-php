<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesReorderLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var ChangeItemPagesReorderLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public ChangeItemPagesReorderLayoutPagesItemBoxesMedia $media;

    /**
     * @var ChangeItemPagesReorderLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public ChangeItemPagesReorderLayoutPagesItemBoxesCrop $crop;

    /**
     * @var ChangeItemPagesReorderLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public ChangeItemPagesReorderLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var ChangeItemPagesReorderLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public ChangeItemPagesReorderLayoutPagesItemBoxesTrim $trim;

    /**
     * @var ChangeItemPagesReorderLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public ChangeItemPagesReorderLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: ChangeItemPagesReorderLayoutPagesItemBoxesMedia,
     *   crop: ChangeItemPagesReorderLayoutPagesItemBoxesCrop,
     *   bleed: ChangeItemPagesReorderLayoutPagesItemBoxesBleed,
     *   trim: ChangeItemPagesReorderLayoutPagesItemBoxesTrim,
     *   art: ChangeItemPagesReorderLayoutPagesItemBoxesArt,
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
