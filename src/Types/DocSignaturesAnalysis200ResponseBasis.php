<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesAnalysis200ResponseBasis extends JsonSerializableType
{
    /**
     * @var DocSignaturesAnalysis200ResponseBasisVersion $version
     */
    #[JsonProperty('version')]
    public DocSignaturesAnalysis200ResponseBasisVersion $version;

    /**
     * @var int $editsVersion
     */
    #[JsonProperty('editsVersion')]
    public int $editsVersion;

    /**
     * @var value-of<DocSignaturesAnalysis200ResponseBasisSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @param array{
     *   version: DocSignaturesAnalysis200ResponseBasisVersion,
     *   editsVersion: int,
     *   source: value-of<DocSignaturesAnalysis200ResponseBasisSource>,
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
