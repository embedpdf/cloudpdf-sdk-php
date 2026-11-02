<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemPagesCopyLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var ChangeItemPagesCopyLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public ChangeItemPagesCopyLayoutPagesItemBoxesMedia $media;

    /**
     * @var ChangeItemPagesCopyLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public ChangeItemPagesCopyLayoutPagesItemBoxesCrop $crop;

    /**
     * @var ChangeItemPagesCopyLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public ChangeItemPagesCopyLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var ChangeItemPagesCopyLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public ChangeItemPagesCopyLayoutPagesItemBoxesTrim $trim;

    /**
     * @var ChangeItemPagesCopyLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public ChangeItemPagesCopyLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: ChangeItemPagesCopyLayoutPagesItemBoxesMedia,
     *   crop: ChangeItemPagesCopyLayoutPagesItemBoxesCrop,
     *   bleed: ChangeItemPagesCopyLayoutPagesItemBoxesBleed,
     *   trim: ChangeItemPagesCopyLayoutPagesItemBoxesTrim,
     *   art: ChangeItemPagesCopyLayoutPagesItemBoxesArt,
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
