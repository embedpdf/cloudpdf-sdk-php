<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesReorder200ResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesReorder200ResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesReorder200ResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesReorder200ResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesReorder200ResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesReorder200ResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesReorder200ResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesReorder200ResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesReorder200ResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesReorder200ResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesReorder200ResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesReorder200ResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesReorder200ResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesReorder200ResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesReorder200ResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesReorder200ResponseLayoutPagesItemBoxesArt,
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
