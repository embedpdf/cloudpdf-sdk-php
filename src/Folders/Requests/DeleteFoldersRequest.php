<?php

namespace CloudPDF\Folders\Requests;

use CloudPDF\Core\Json\JsonSerializableType;

class DeleteFoldersRequest extends JsonSerializableType
{
    /**
     * @var ?bool $recursive true deletes everything in the folder too. Never the default.
     */
    public ?bool $recursive;

    /**
     * @param array{
     *   recursive?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->recursive = $values['recursive'] ?? null;
    }
}
