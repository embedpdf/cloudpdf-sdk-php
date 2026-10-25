<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesInsertLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var ChangeItemPagesInsertLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public ChangeItemPagesInsertLayoutPagesItemBoxesMedia $media;

    /**
     * @var ChangeItemPagesInsertLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public ChangeItemPagesInsertLayoutPagesItemBoxesCrop $crop;

    /**
     * @var ChangeItemPagesInsertLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public ChangeItemPagesInsertLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var ChangeItemPagesInsertLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public ChangeItemPagesInsertLayoutPagesItemBoxesTrim $trim;

    /**
     * @var ChangeItemPagesInsertLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public ChangeItemPagesInsertLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: ChangeItemPagesInsertLayoutPagesItemBoxesMedia,
     *   crop: ChangeItemPagesInsertLayoutPagesItemBoxesCrop,
     *   bleed: ChangeItemPagesInsertLayoutPagesItemBoxesBleed,
     *   trim: ChangeItemPagesInsertLayoutPagesItemBoxesTrim,
     *   art: ChangeItemPagesInsertLayoutPagesItemBoxesArt,
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
