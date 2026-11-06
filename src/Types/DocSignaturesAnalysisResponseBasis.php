<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesAnalysisResponseBasis extends JsonSerializableType
{
    /**
     * @var DocSignaturesAnalysisResponseBasisVersion $version
     */
    #[JsonProperty('version')]
    public DocSignaturesAnalysisResponseBasisVersion $version;

    /**
     * @var int $editsVersion
     */
    #[JsonProperty('editsVersion')]
    public int $editsVersion;

    /**
     * @var value-of<DocSignaturesAnalysisResponseBasisSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   version: DocSignaturesAnalysisResponseBasisVersion,
     *   editsVersion: int,
     *   source: value-of<DocSignaturesAnalysisResponseBasisSource>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->version = $values['version'];
        $this->editsVersion = $values['editsVersion'];
        $this->source = $values['source'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
