<?php

namespace CloudPDF\Doc\Pages\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Doc\Pages\Types\DocPagesSetScaleRequestMeasure;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesSetScaleRequest extends JsonSerializableType
{
    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @var ?DocPagesSetScaleRequestMeasure $measure
     */
    #[JsonProperty('measure')]
    public ?DocPagesSetScaleRequestMeasure $measure;

    /**
     * @param array{
     *   documentPassword?: ?string,
     *   measure?: ?DocPagesSetScaleRequestMeasure,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->measure = $values['measure'] ?? null;
    }
}
