<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocumentsCommit200Response extends JsonSerializableType
{
    /**
     * @var DocumentsCommit200ResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsCommit200ResponseDocument $document;

    /**
     * @param array{
     *   document: DocumentsCommit200ResponseDocument,
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
