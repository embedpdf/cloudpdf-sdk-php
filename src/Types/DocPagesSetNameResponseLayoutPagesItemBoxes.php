<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetNameResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesSetNameResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesSetNameResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesSetNameResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesSetNameResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesSetNameResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesSetNameResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesSetNameResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesSetNameResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesSetNameResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesSetNameResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesSetNameResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesSetNameResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesSetNameResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesSetNameResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesSetNameResponseLayoutPagesItemBoxesArt,
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
