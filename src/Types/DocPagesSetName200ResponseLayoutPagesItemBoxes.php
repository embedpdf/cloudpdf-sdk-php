<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetName200ResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesSetName200ResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesSetName200ResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesSetName200ResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesSetName200ResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesSetName200ResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesSetName200ResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesSetName200ResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesSetName200ResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesSetName200ResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesSetName200ResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesSetName200ResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesSetName200ResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesSetName200ResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesSetName200ResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesSetName200ResponseLayoutPagesItemBoxesArt,
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
