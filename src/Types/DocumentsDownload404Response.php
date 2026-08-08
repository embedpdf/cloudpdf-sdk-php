<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocumentsDownload404Response extends JsonSerializableType
{
    /**
     * @var DocumentsDownload404ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsDownload404ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsDownload404ResponseError,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->error = $values['error'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
