<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationState extends JsonSerializableType
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
     *    DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     *   |DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
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
     *    DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     *   |DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
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
     * @param DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown $unknown
     * @return DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationState
     */
    public static function unknown(DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown $unknown): DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationState
    {
        return new DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationState([
            'kind' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @param DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown $known
     * @return DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationState
     */
    public static function known(DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown $known): DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationState
    {
        return new DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationState([
            'kind' => 'known',
            'value' => $known,
        ]);
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown && $this->kind === 'unknown';
    }

    /**
     * @return DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     */
    public function asUnknown(): DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
    {
        if (!($this->value instanceof DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown && $this->kind === 'unknown')) {
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
        return $this->value instanceof DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown && $this->kind === 'known';
    }

    /**
     * @return DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
     */
    public function asKnown(): DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
    {
        if (!($this->value instanceof DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown && $this->kind === 'known')) {
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
                $args['value'] = DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown::jsonDeserialize($data);
                break;
            case 'known':
                $args['value'] = DocPagesRemoveName200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown::jsonDeserialize($data);
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
