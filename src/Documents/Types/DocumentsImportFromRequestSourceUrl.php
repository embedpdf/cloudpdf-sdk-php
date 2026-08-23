<?php

namespace CloudPDF\Documents\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

/**
 * The caller supplies the authority: a presigned S3/GCS/Azure/R2/MinIO GET, or any HTTPS endpoint the deployment import policy allows. The URL is a capability — treat it as a secret. CloudPDF never echoes its query string back in errors, logs, or stored failure reasons.
 */
class DocumentsImportFromRequestSourceUrl extends JsonSerializableType
{
    /**
     * @var string $url The URL to fetch. Must be allowed by the deployment import policy (scheme, network range, size) and must declare a length.
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   url: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
