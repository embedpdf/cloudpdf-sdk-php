<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesInsertBlank200ResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesInsertBlank200ResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesInsertBlank200ResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesInsertBlank200ResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesInsertBlank200ResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesInsertBlank200ResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesInsertBlank200ResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesInsertBlank200ResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesInsertBlank200ResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesInsertBlank200ResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesInsertBlank200ResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesInsertBlank200ResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesInsertBlank200ResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesInsertBlank200ResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesInsertBlank200ResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesInsertBlank200ResponseLayoutPagesItemBoxesArt,
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
