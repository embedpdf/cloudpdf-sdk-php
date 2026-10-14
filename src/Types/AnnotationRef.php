<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class AnnotationRef extends JsonSerializableType
{
    /**
     * @var (
     *    'objectNumber'
     *   |'baseIndex'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    AnnotationRefObjectNumber
     *   |AnnotationRefBaseIndex
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'objectNumber'
     *   |'baseIndex'
     *   |'_unknown'
     * ),
     *   value: (
     *    AnnotationRefObjectNumber
     *   |AnnotationRefBaseIndex
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
     * @param AnnotationRefObjectNumber $objectNumber
     * @return AnnotationRef
     */
    public static function objectNumber(AnnotationRefObjectNumber $objectNumber): AnnotationRef
    {
        return new AnnotationRef([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param AnnotationRefBaseIndex $baseIndex
     * @return AnnotationRef
     */
    public static function baseIndex(AnnotationRefBaseIndex $baseIndex): AnnotationRef
    {
        return new AnnotationRef([
            'kind' => 'baseIndex',
            'value' => $baseIndex,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof AnnotationRefObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return AnnotationRefObjectNumber
     */
    public function asObjectNumber(): AnnotationRefObjectNumber
    {
        if (!($this->value instanceof AnnotationRefObjectNumber && $this->kind === 'objectNumber')) {
            throw new Exception(
                "Expected objectNumber; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isBaseIndex(): bool
    {
        return $this->value instanceof AnnotationRefBaseIndex && $this->kind === 'baseIndex';
    }

    /**
     * @return AnnotationRefBaseIndex
     */
    public function asBaseIndex(): AnnotationRefBaseIndex
    {
        if (!($this->value instanceof AnnotationRefBaseIndex && $this->kind === 'baseIndex')) {
            throw new Exception(
                "Expected baseIndex; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'objectNumber':
                $value = $this->asObjectNumber()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'baseIndex':
                $value = $this->asBaseIndex()->jsonSerialize();
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
            case 'objectNumber':
                $args['value'] = AnnotationRefObjectNumber::jsonDeserialize($data);
                break;
            case 'baseIndex':
                $args['value'] = AnnotationRefBaseIndex::jsonDeserialize($data);
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
