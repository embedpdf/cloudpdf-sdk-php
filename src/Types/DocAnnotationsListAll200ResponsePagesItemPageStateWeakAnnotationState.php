<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState extends JsonSerializableType
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
     *    DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown
     *   |DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown
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
     *    DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown
     *   |DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown
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
     * @param DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown $unknown
     * @return DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState
     */
    public static function unknown(DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown $unknown): DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState
    {
        return new DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState([
            'kind' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown $known
     * @return DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState
     */
    public static function known(DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown $known): DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState
    {
        return new DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationState([
            'kind' => 'known',
            'value' => $known,
        ]);
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown && $this->kind === 'unknown';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown
     */
    public function asUnknown(): DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown && $this->kind === 'unknown')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown && $this->kind === 'known';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown
     */
    public function asKnown(): DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown && $this->kind === 'known')) {
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
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateUnknown::jsonDeserialize($data);
                break;
            case 'known':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemPageStateWeakAnnotationStateKnown::jsonDeserialize($data);
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
