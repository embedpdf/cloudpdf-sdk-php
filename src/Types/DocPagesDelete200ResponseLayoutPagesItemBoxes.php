<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesDelete200ResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesDelete200ResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesDelete200ResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesDelete200ResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesDelete200ResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesDelete200ResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesDelete200ResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesDelete200ResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesDelete200ResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesDelete200ResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesDelete200ResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesDelete200ResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesDelete200ResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesDelete200ResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesDelete200ResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesDelete200ResponseLayoutPagesItemBoxesArt,
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
