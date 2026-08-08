<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsDelete200ResponseMeta extends JsonSerializableType
{
    /**
     * @var array<DocAnnotationsDelete200ResponseMetaAffectedPagesItem> $affectedPages
     */
    #[JsonProperty('affectedPages'), ArrayType([DocAnnotationsDelete200ResponseMetaAffectedPagesItem::class])]
    public array $affectedPages;

    /**
     * @var ?DocAnnotationsDelete200ResponseMetaCacheDelta $cacheDelta
     */
    #[JsonProperty('cacheDelta')]
    public ?DocAnnotationsDelete200ResponseMetaCacheDelta $cacheDelta;

    /**
     * @param array{
     *   affectedPages: array<DocAnnotationsDelete200ResponseMetaAffectedPagesItem>,
     *   cacheDelta?: ?DocAnnotationsDelete200ResponseMetaCacheDelta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->affectedPages = $values['affectedPages'];
        $this->cacheDelta = $values['cacheDelta'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
