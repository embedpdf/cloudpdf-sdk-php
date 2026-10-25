<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesRestoreLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var ChangeItemPagesRestoreLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public ChangeItemPagesRestoreLayoutPagesItemBoxesMedia $media;

    /**
     * @var ChangeItemPagesRestoreLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public ChangeItemPagesRestoreLayoutPagesItemBoxesCrop $crop;

    /**
     * @var ChangeItemPagesRestoreLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public ChangeItemPagesRestoreLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var ChangeItemPagesRestoreLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public ChangeItemPagesRestoreLayoutPagesItemBoxesTrim $trim;

    /**
     * @var ChangeItemPagesRestoreLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public ChangeItemPagesRestoreLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: ChangeItemPagesRestoreLayoutPagesItemBoxesMedia,
     *   crop: ChangeItemPagesRestoreLayoutPagesItemBoxesCrop,
     *   bleed: ChangeItemPagesRestoreLayoutPagesItemBoxesBleed,
     *   trim: ChangeItemPagesRestoreLayoutPagesItemBoxesTrim,
     *   art: ChangeItemPagesRestoreLayoutPagesItemBoxesArt,
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
