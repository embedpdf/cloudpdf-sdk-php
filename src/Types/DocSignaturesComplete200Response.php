<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesComplete200Response extends JsonSerializableType
{
    /**
     * @var value-of<DocSignaturesComplete200ResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var DocSignaturesComplete200ResponseSignature $signature
     */
    #[JsonProperty('signature')]
    public DocSignaturesComplete200ResponseSignature $signature;

    /**
     * @var DocSignaturesComplete200ResponseVersion $version
     */
    #[JsonProperty('version')]
    public DocSignaturesComplete200ResponseVersion $version;

    /**
     * @var DocSignaturesComplete200ResponsePrevious $previous
     */
    #[JsonProperty('previous')]
    public DocSignaturesComplete200ResponsePrevious $previous;

    /**
     * @var DocSignaturesComplete200ResponseProtection $protection
     */
    #[JsonProperty('protection')]
    public DocSignaturesComplete200ResponseProtection $protection;

    /**
     * @var DocSignaturesComplete200ResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public DocSignaturesComplete200ResponseMeta $meta;

    /**
     * @param array{
     *   status: value-of<DocSignaturesComplete200ResponseStatus>,
     *   signature: DocSignaturesComplete200ResponseSignature,
     *   version: DocSignaturesComplete200ResponseVersion,
     *   previous: DocSignaturesComplete200ResponsePrevious,
     *   protection: DocSignaturesComplete200ResponseProtection,
     *   meta: DocSignaturesComplete200ResponseMeta,
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
