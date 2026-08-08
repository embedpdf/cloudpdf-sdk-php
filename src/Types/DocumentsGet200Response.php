<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocumentsGet200Response extends JsonSerializableType
{
    /**
     * @var DocumentsGet200ResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsGet200ResponseDocument $document;

    /**
     * @param array{
     *   document: DocumentsGet200ResponseDocument,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->document = $values['document'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
