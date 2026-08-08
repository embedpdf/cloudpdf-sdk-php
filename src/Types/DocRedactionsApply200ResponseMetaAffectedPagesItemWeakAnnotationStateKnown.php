<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown extends JsonSerializableType
{
    /**
     * @var bool $hasAnyWeakAnnotations
     */
    #[JsonProperty('hasAnyWeakAnnotations')]
    public bool $hasAnyWeakAnnotations;

    /**
     * @param array{
     *   hasAnyWeakAnnotations: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->hasAnyWeakAnnotations = $values['hasAnyWeakAnnotations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
