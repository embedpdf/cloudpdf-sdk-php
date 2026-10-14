<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesRotate200ResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesRotate200ResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesRotate200ResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesRotate200ResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesRotate200ResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesRotate200ResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesRotate200ResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesRotate200ResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesRotate200ResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesRotate200ResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesRotate200ResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesRotate200ResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesRotate200ResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesRotate200ResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesRotate200ResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesRotate200ResponseLayoutPagesItemBoxesArt,
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
