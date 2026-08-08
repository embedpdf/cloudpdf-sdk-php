<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class DocFormsSetValue200ResponseMeta extends JsonSerializableType
{
    /**
     * @var array<DocFormsSetValue200ResponseMetaAffectedPagesItem> $affectedPages
     */
    #[JsonProperty('affectedPages'), ArrayType([DocFormsSetValue200ResponseMetaAffectedPagesItem::class])]
    public array $affectedPages;

    /**
     * @var ?DocFormsSetValue200ResponseMetaCacheDelta $cacheDelta
     */
    #[JsonProperty('cacheDelta')]
    public ?DocFormsSetValue200ResponseMetaCacheDelta $cacheDelta;

    /**
     * @param array{
     *   affectedPages: array<DocFormsSetValue200ResponseMetaAffectedPagesItem>,
     *   cacheDelta?: ?DocFormsSetValue200ResponseMetaCacheDelta,
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
