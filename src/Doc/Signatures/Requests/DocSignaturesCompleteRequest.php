<?php

namespace CloudPDF\Doc\Signatures\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Doc\Signatures\Types\DocSignaturesCompleteRequestExpectedVersion;

class DocSignaturesCompleteRequest extends JsonSerializableType
{
    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @var string $cms
     */
    #[JsonProperty('cms')]
    public string $cms;

    /**
     * @var DocSignaturesCompleteRequestExpectedVersion $expectedVersion
     */
    #[JsonProperty('expectedVersion')]
    public DocSignaturesCompleteRequestExpectedVersion $expectedVersion;

    /**
     * @param array{
     *   cms: string,
     *   expectedVersion: DocSignaturesCompleteRequestExpectedVersion,
     *   documentPassword?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->cms = $values['cms'];
        $this->expectedVersion = $values['expectedVersion'];
    }
}
