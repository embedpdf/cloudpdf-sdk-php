<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesRemoveName200ResponseLayoutPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var DocPagesRemoveName200ResponseLayoutPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public DocPagesRemoveName200ResponseLayoutPagesItemBoxesMedia $media;

    /**
     * @var DocPagesRemoveName200ResponseLayoutPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public DocPagesRemoveName200ResponseLayoutPagesItemBoxesCrop $crop;

    /**
     * @var DocPagesRemoveName200ResponseLayoutPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public DocPagesRemoveName200ResponseLayoutPagesItemBoxesBleed $bleed;

    /**
     * @var DocPagesRemoveName200ResponseLayoutPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public DocPagesRemoveName200ResponseLayoutPagesItemBoxesTrim $trim;

    /**
     * @var DocPagesRemoveName200ResponseLayoutPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public DocPagesRemoveName200ResponseLayoutPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: DocPagesRemoveName200ResponseLayoutPagesItemBoxesMedia,
     *   crop: DocPagesRemoveName200ResponseLayoutPagesItemBoxesCrop,
     *   bleed: DocPagesRemoveName200ResponseLayoutPagesItemBoxesBleed,
     *   trim: DocPagesRemoveName200ResponseLayoutPagesItemBoxesTrim,
     *   art: DocPagesRemoveName200ResponseLayoutPagesItemBoxesArt,
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
