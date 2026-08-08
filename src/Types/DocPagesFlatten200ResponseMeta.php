<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocPagesFlatten200ResponseMeta extends JsonSerializableType
{
    /**
     * @var array<DocPagesFlatten200ResponseMetaAffectedPagesItem> $affectedPages
     */
    #[JsonProperty('affectedPages'), ArrayType([DocPagesFlatten200ResponseMetaAffectedPagesItem::class])]
    public array $affectedPages;

    /**
     * @var ?DocPagesFlatten200ResponseMetaCacheDelta $cacheDelta
     */
    #[JsonProperty('cacheDelta')]
    public ?DocPagesFlatten200ResponseMetaCacheDelta $cacheDelta;

    /**
     * @param array{
     *   affectedPages: array<DocPagesFlatten200ResponseMetaAffectedPagesItem>,
     *   cacheDelta?: ?DocPagesFlatten200ResponseMetaCacheDelta,
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
