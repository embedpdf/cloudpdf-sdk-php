<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesInsertBlankLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var ChangeItemPagesInsertBlankLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public ChangeItemPagesInsertBlankLayoutPagesItemBoxesMedia $media;

    /**
     * @var ChangeItemPagesInsertBlankLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public ChangeItemPagesInsertBlankLayoutPagesItemBoxesCrop $crop;

    /**
     * @var ChangeItemPagesInsertBlankLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public ChangeItemPagesInsertBlankLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var ChangeItemPagesInsertBlankLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public ChangeItemPagesInsertBlankLayoutPagesItemBoxesTrim $trim;

    /**
     * @var ChangeItemPagesInsertBlankLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public ChangeItemPagesInsertBlankLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: ChangeItemPagesInsertBlankLayoutPagesItemBoxesMedia,
     *   crop: ChangeItemPagesInsertBlankLayoutPagesItemBoxesCrop,
     *   bleed: ChangeItemPagesInsertBlankLayoutPagesItemBoxesBleed,
     *   trim: ChangeItemPagesInsertBlankLayoutPagesItemBoxesTrim,
     *   art: ChangeItemPagesInsertBlankLayoutPagesItemBoxesArt,
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
