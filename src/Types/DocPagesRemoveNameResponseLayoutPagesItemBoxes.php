<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesRemoveNameResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesRemoveNameResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesRemoveNameResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesRemoveNameResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesRemoveNameResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesRemoveNameResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesRemoveNameResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesRemoveNameResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesRemoveNameResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesRemoveNameResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesRemoveNameResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesRemoveNameResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesRemoveNameResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesRemoveNameResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesRemoveNameResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesRemoveNameResponseLayoutPagesItemBoxesArt,
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
