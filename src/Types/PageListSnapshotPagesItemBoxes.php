<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PageListSnapshotPagesItemBoxes extends JsonSerializableType
{
    /**
     * @var PageListSnapshotPagesItemBoxesMedia $media
     */
    #[JsonProperty('media')]
    public PageListSnapshotPagesItemBoxesMedia $media;

    /**
     * @var PageListSnapshotPagesItemBoxesCrop $crop
     */
    #[JsonProperty('crop')]
    public PageListSnapshotPagesItemBoxesCrop $crop;

    /**
     * @var PageListSnapshotPagesItemBoxesBleed $bleed
     */
    #[JsonProperty('bleed')]
    public PageListSnapshotPagesItemBoxesBleed $bleed;

    /**
     * @var PageListSnapshotPagesItemBoxesTrim $trim
     */
    #[JsonProperty('trim')]
    public PageListSnapshotPagesItemBoxesTrim $trim;

    /**
     * @var PageListSnapshotPagesItemBoxesArt $art
     */
    #[JsonProperty('art')]
    public PageListSnapshotPagesItemBoxesArt $art;

    /**
     * @param array{
     *   media: PageListSnapshotPagesItemBoxesMedia,
     *   crop: PageListSnapshotPagesItemBoxesCrop,
     *   bleed: PageListSnapshotPagesItemBoxesBleed,
     *   trim: PageListSnapshotPagesItemBoxesTrim,
     *   art: PageListSnapshotPagesItemBoxesArt,
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
