<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState extends JsonSerializableType
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
     *    DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     *   |DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
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
     *    DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     *   |DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
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
     * @param DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown $unknown
     * @return DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState
     */
    public static function unknown(DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown $unknown): DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState
    {
        return new DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState([
            'kind' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @param DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown $known
     * @return DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState
     */
    public static function known(DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown $known): DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState
    {
        return new DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationState([
            'kind' => 'known',
            'value' => $known,
        ]);
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown && $this->kind === 'unknown';
    }

    /**
     * @return DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     */
    public function asUnknown(): DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
    {
        if (!($this->value instanceof DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown && $this->kind === 'unknown')) {
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
        return $this->value instanceof DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown && $this->kind === 'known';
    }

    /**
     * @return DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
     */
    public function asKnown(): DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
    {
        if (!($this->value instanceof DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown && $this->kind === 'known')) {
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
                $args['value'] = DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown::jsonDeserialize($data);
                break;
            case 'known':
                $args['value'] = DocAnnotationsCreate200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown::jsonDeserialize($data);
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
