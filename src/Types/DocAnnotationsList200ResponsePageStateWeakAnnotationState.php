<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponsePageStateWeakAnnotationState extends JsonSerializableType
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
     *    DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown
     *   |DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown
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
     *    DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown
     *   |DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown
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
     * @param DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown $unknown
     * @return DocAnnotationsList200ResponsePageStateWeakAnnotationState
     */
    public static function unknown(DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown $unknown): DocAnnotationsList200ResponsePageStateWeakAnnotationState
    {
        return new DocAnnotationsList200ResponsePageStateWeakAnnotationState([
            'kind' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown $known
     * @return DocAnnotationsList200ResponsePageStateWeakAnnotationState
     */
    public static function known(DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown $known): DocAnnotationsList200ResponsePageStateWeakAnnotationState
    {
        return new DocAnnotationsList200ResponsePageStateWeakAnnotationState([
            'kind' => 'known',
            'value' => $known,
        ]);
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown && $this->kind === 'unknown';
    }

    /**
     * @return DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown
     */
    public function asUnknown(): DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown
    {
        if (!($this->value instanceof DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown && $this->kind === 'unknown')) {
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
        return $this->value instanceof DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown && $this->kind === 'known';
    }

    /**
     * @return DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown
     */
    public function asKnown(): DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown
    {
        if (!($this->value instanceof DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown && $this->kind === 'known')) {
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
                $args['value'] = DocAnnotationsList200ResponsePageStateWeakAnnotationStateUnknown::jsonDeserialize($data);
                break;
            case 'known':
                $args['value'] = DocAnnotationsList200ResponsePageStateWeakAnnotationStateKnown::jsonDeserialize($data);
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
