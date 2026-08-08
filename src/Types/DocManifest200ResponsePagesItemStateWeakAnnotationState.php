<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocManifest200ResponsePagesItemStateWeakAnnotationState extends JsonSerializableType
{
    /**
     * @var (
     *    'unknown'
     *   |'known'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown
     *   |DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'unknown'
     *   |'known'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown
     *   |DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown
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
     * @param DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown $unknown
     * @return DocManifest200ResponsePagesItemStateWeakAnnotationState
     */
    public static function unknown(DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown $unknown): DocManifest200ResponsePagesItemStateWeakAnnotationState
    {
        return new DocManifest200ResponsePagesItemStateWeakAnnotationState([
            'kind' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @param DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown $known
     * @return DocManifest200ResponsePagesItemStateWeakAnnotationState
     */
    public static function known(DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown $known): DocManifest200ResponsePagesItemStateWeakAnnotationState
    {
        return new DocManifest200ResponsePagesItemStateWeakAnnotationState([
            'kind' => 'known',
            'value' => $known,
        ]);
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown && $this->kind === 'unknown';
    }

    /**
     * @return DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown
     */
    public function asUnknown(): DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown
    {
        if (!($this->value instanceof DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown && $this->kind === 'unknown')) {
            throw new Exception(
                "Expected unknown; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isKnown(): bool
    {
        return $this->value instanceof DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown && $this->kind === 'known';
    }

    /**
     * @return DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown
     */
    public function asKnown(): DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown
    {
        if (!($this->value instanceof DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown && $this->kind === 'known')) {
            throw new Exception(
                "Expected known; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'unknown':
                $value = $this->asUnknown()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'known':
                $value = $this->asKnown()->jsonSerialize();
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
            case 'unknown':
                $args['value'] = DocManifest200ResponsePagesItemStateWeakAnnotationStateUnknown::jsonDeserialize($data);
                break;
            case 'known':
                $args['value'] = DocManifest200ResponsePagesItemStateWeakAnnotationStateKnown::jsonDeserialize($data);
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
