<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class TokensIssueRequest extends JsonSerializableType
{
    /**
     * @var (
     *    'doc'
     *   |'tenant'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    TokensIssueRequestDoc
     *   |TokensIssueRequestTenant
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'doc'
     *   |'tenant'
     *   |'_unknown'
     * ),
     *   value: (
     *    TokensIssueRequestDoc
     *   |TokensIssueRequestTenant
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->value = $values['value'];
    }

    /**
     * @param TokensIssueRequestDoc $doc
     * @return TokensIssueRequest
     */
    public static function doc(TokensIssueRequestDoc $doc): TokensIssueRequest
    {
        return new TokensIssueRequest([
            'kind' => 'doc',
            'value' => $doc,
        ]);
    }

    /**
     * @param TokensIssueRequestTenant $tenant
     * @return TokensIssueRequest
     */
    public static function tenant(TokensIssueRequestTenant $tenant): TokensIssueRequest
    {
        return new TokensIssueRequest([
            'kind' => 'tenant',
            'value' => $tenant,
        ]);
    }

    /**
     * @return bool
     */
    public function isDoc(): bool
    {
        return $this->value instanceof TokensIssueRequestDoc && $this->kind === 'doc';
    }

    /**
     * @return TokensIssueRequestDoc
     */
    public function asDoc(): TokensIssueRequestDoc
    {
        if (!($this->value instanceof TokensIssueRequestDoc && $this->kind === 'doc')) {
            throw new Exception(
                "Expected doc; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTenant(): bool
    {
        return $this->value instanceof TokensIssueRequestTenant && $this->kind === 'tenant';
    }

    /**
     * @return TokensIssueRequestTenant
     */
    public function asTenant(): TokensIssueRequestTenant
    {
        if (!($this->value instanceof TokensIssueRequestTenant && $this->kind === 'tenant')) {
            throw new Exception(
                "Expected tenant; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['kind'] = $this->kind;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->kind) {
            case 'doc':
                $value = $this->asDoc()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tenant':
                $value = $this->asTenant()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (!array_key_exists('kind', $data)) {
            throw new Exception(
                "JSON data is missing property 'kind'",
            );
        }
        $kind = $data['kind'];
        if (!(is_string($kind))) {
            throw new Exception(
                "Expected property 'kind' in JSON data to be string, instead received " . get_debug_type($data['kind']),
            );
        }

        $args['kind'] = $kind;
        switch ($kind) {
            case 'doc':
                $args['value'] = TokensIssueRequestDoc::jsonDeserialize($data);
                break;
            case 'tenant':
                $args['value'] = TokensIssueRequestTenant::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['kind'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
