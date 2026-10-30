<?php

namespace CloudPDF;

use CloudPDF\Deployment\DeploymentClient;
use CloudPDF\Doc\DocClient;
use CloudPDF\Grants\GrantsClient;
use CloudPDF\Tenants\TenantsClient;
use CloudPDF\Documents\DocumentsClient;
use CloudPDF\Folders\FoldersClient;
use CloudPDF\Tokens\TokensClient;
use Psr\Http\Client\ClientInterface;
use CloudPDF\Core\Client\RawClient;

class CloudPDFClient
{
    /**
     * @var DeploymentClient $deployment
     */
    public DeploymentClient $deployment;

    /**
     * @var DocClient $doc
     */
    public DocClient $doc;

    /**
     * @var GrantsClient $grants
     */
    public GrantsClient $grants;

    /**
     * @var TenantsClient $tenants
     */
    public TenantsClient $tenants;

    /**
     * @var DocumentsClient $documents
     */
    public DocumentsClient $documents;

    /**
     * @var FoldersClient $folders
     */
    public FoldersClient $folders;

    /**
     * @var TokensClient $tokens
     */
    public TokensClient $tokens;

    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param ?string $token The token to use for authentication.
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        ?string $token = null,
        ?array $options = null,
    ) {
        $defaultHeaders = [
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'CloudPDF',
            'X-Fern-SDK-Version' => '3.0.0-alpha.19',
            'User-Agent' => 'cloudpdf/sdk/3.0.0-alpha.19',
        ];
        if ($token != null) {
            $defaultHeaders['Authorization'] = "Bearer $token";
        }

        $this->options = $options ?? [];

        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );

        $this->deployment = new DeploymentClient($this->client, $this->options);
        $this->doc = new DocClient($this->client, $this->options);
        $this->grants = new GrantsClient($this->client, $this->options);
        $this->tenants = new TenantsClient($this->client, $this->options);
        $this->documents = new DocumentsClient($this->client, $this->options);
        $this->folders = new FoldersClient($this->client, $this->options);
        $this->tokens = new TokensClient($this->client, $this->options);
    }
}
