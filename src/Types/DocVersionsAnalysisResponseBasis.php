<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocVersionsAnalysisResponseBasis extends JsonSerializableType
{
    /**
     * @var DocVersionsAnalysisResponseBasisVersion $version
     */
    #[JsonProperty('version')]
    public DocVersionsAnalysisResponseBasisVersion $version;

    /**
     * @var int $editsVersion
     */
    #[JsonProperty('editsVersion')]
    public int $editsVersion;

    /**
     * @var value-of<DocVersionsAnalysisResponseBasisSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   version: DocVersionsAnalysisResponseBasisVersion,
     *   editsVersion: int,
     *   source: value-of<DocVersionsAnalysisResponseBasisSource>,
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
