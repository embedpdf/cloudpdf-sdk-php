<?php

namespace CloudPDF\Documents\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Utils\File;

class UploadProxyDocumentsRequest extends JsonSerializableType
{
    /**
     * @var File $file
     */
    public File $file;

    /**
     * @param array{
     *   file: File,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->file = $values['file'];
    }
}
