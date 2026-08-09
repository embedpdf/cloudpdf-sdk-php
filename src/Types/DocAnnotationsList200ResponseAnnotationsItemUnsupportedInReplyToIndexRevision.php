<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemUnsupportedInReplyToIndexRevision extends JsonSerializableType
{
    /**
     * @var string $docSessionId
     */
    #[JsonProperty('docSessionId')]
    public string $docSessionId;

    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var int $generation
     */
    #[JsonProperty('generation')]
    public int $generation;

    /**
     * @param array{
     *   docSessionId: string,
     *   pageObjectNumber: int,
     *   generation: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->docSessionId = $values['docSessionId'];
        $this->pageObjectNumber = $values['pageObjectNumber'];
        $this->generation = $values['generation'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
