<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri extends JsonSerializableType
{
    /**
     * @var string $uri
     */
    #[JsonProperty('uri')]
    public string $uri;

    /**
     * @param array{
     *   uri: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uri = $values['uri'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
