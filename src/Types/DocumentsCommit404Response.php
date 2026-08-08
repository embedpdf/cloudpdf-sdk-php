<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocumentsCommit404Response extends JsonSerializableType
{
    /**
     * @var DocumentsCommit404ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsCommit404ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsCommit404ResponseError,
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
