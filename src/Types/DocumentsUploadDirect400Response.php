<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocumentsUploadDirect400Response extends JsonSerializableType
{
    /**
     * @var DocumentsUploadDirect400ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsUploadDirect400ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsUploadDirect400ResponseError,
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
