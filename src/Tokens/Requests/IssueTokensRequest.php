<?php

namespace Cloudpdf\Tokens\Requests;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Types\TokensIssueRequest;

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
