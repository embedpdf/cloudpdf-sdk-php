<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocumentsDelete404Response extends JsonSerializableType
{
    /**
     * @var DocumentsDelete404ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsDelete404ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsDelete404ResponseError,
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
