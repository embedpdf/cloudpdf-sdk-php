<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocumentsGet404Response extends JsonSerializableType
{
    /**
     * @var DocumentsGet404ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsGet404ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsGet404ResponseError,
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
