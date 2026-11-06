<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesCompleteResponse extends JsonSerializableType
{
    /**
     * @var value-of<DocSignaturesCompleteResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var DocSignaturesCompleteResponseSignature $signature
     */
    #[JsonProperty('signature')]
    public DocSignaturesCompleteResponseSignature $signature;

    /**
     * @var DocSignaturesCompleteResponseVersion $version
     */
    #[JsonProperty('version')]
    public DocSignaturesCompleteResponseVersion $version;

    /**
     * @var DocSignaturesCompleteResponsePrevious $previous
     */
    #[JsonProperty('previous')]
    public DocSignaturesCompleteResponsePrevious $previous;

    /**
     * @var DocSignaturesCompleteResponseProtection $protection
     */
    #[JsonProperty('protection')]
    public DocSignaturesCompleteResponseProtection $protection;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   status: value-of<DocSignaturesCompleteResponseStatus>,
     *   signature: DocSignaturesCompleteResponseSignature,
     *   version: DocSignaturesCompleteResponseVersion,
     *   previous: DocSignaturesCompleteResponsePrevious,
     *   protection: DocSignaturesCompleteResponseProtection,
     *   meta: MutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->signature = $values['signature'];
        $this->version = $values['version'];
        $this->previous = $values['previous'];
        $this->protection = $values['protection'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
