<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocVersionsAnalysis200ResponseBasis extends JsonSerializableType
{
    /**
     * @var DocVersionsAnalysis200ResponseBasisVersion $version
     */
    #[JsonProperty('version')]
    public DocVersionsAnalysis200ResponseBasisVersion $version;

    /**
     * @var int $editsVersion
     */
    #[JsonProperty('editsVersion')]
    public int $editsVersion;

    /**
     * @var value-of<DocVersionsAnalysis200ResponseBasisSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   version: DocVersionsAnalysis200ResponseBasisVersion,
     *   editsVersion: int,
     *   source: value-of<DocVersionsAnalysis200ResponseBasisSource>,
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
