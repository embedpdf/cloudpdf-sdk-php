<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesInsert200ResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesInsert200ResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesInsert200ResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesInsert200ResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesInsert200ResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesInsert200ResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesInsert200ResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesInsert200ResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesInsert200ResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesInsert200ResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesInsert200ResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesInsert200ResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesInsert200ResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesInsert200ResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesInsert200ResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesInsert200ResponseLayoutPagesItemBoxesArt,
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
