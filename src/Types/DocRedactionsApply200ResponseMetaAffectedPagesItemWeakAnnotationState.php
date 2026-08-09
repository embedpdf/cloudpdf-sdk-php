<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationState extends JsonSerializableType
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
     *    DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     *   |DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
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
     *    DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     *   |DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
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
     * @param DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown $unknown
     * @return DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationState
     */
    public static function unknown(DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown $unknown): DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationState
    {
        return new DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationState([
            'kind' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @param DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown $known
     * @return DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationState
     */
    public static function known(DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown $known): DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationState
    {
        return new DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationState([
            'kind' => 'known',
            'value' => $known,
        ]);
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown && $this->kind === 'unknown';
    }

    /**
     * @return DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     */
    public function asUnknown(): DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
    {
        if (!($this->value instanceof DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown && $this->kind === 'unknown')) {
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
        return $this->value instanceof DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown && $this->kind === 'known';
    }

    /**
     * @return DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
     */
    public function asKnown(): DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
    {
        if (!($this->value instanceof DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown && $this->kind === 'known')) {
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
                $args['value'] = DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown::jsonDeserialize($data);
                break;
            case 'known':
                $args['value'] = DocRedactionsApply200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown::jsonDeserialize($data);
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
