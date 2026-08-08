<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState extends JsonSerializableType
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
     *    DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     *   |DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
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
     *    DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     *   |DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
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
     * @param DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown $unknown
     * @return DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState
     */
    public static function unknown(DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown $unknown): DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState
    {
        return new DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState([
            'kind' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @param DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown $known
     * @return DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState
     */
    public static function known(DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown $known): DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState
    {
        return new DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationState([
            'kind' => 'known',
            'value' => $known,
        ]);
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown && $this->kind === 'unknown';
    }

    /**
     * @return DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
     */
    public function asUnknown(): DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown
    {
        if (!($this->value instanceof DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown && $this->kind === 'unknown')) {
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
        return $this->value instanceof DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown && $this->kind === 'known';
    }

    /**
     * @return DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
     */
    public function asKnown(): DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown
    {
        if (!($this->value instanceof DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown && $this->kind === 'known')) {
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
                $args['value'] = DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateUnknown::jsonDeserialize($data);
                break;
            case 'known':
                $args['value'] = DocFormsReset200ResponseMetaAffectedPagesItemWeakAnnotationStateKnown::jsonDeserialize($data);
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
