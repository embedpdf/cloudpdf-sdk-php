<?php

namespace CloudPDF\Tokens\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Types\TokensIssueRequest;

class IssueTokensRequest extends JsonSerializableType
{
    /**
     * @var TokensIssueRequest $body
     */
    public TokensIssueRequest $body;

    /**
     * @param array{
     *   body: TokensIssueRequest,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
