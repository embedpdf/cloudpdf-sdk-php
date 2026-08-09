<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemCircleRef extends JsonSerializableType
{
    /**
     * @var (
     *    'objectNumber'
     *   |'nm'
     *   |'index'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemCircleRefNm
     *   |DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'objectNumber'
     *   |'nm'
     *   |'index'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemCircleRefNm
     *   |DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex
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
     * @param DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber $objectNumber
     * @return DocAnnotationsList200ResponseAnnotationsItemCircleRef
     */
    public static function objectNumber(DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber $objectNumber): DocAnnotationsList200ResponseAnnotationsItemCircleRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemCircleRef([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemCircleRefNm $nm
     * @return DocAnnotationsList200ResponseAnnotationsItemCircleRef
     */
    public static function nm(DocAnnotationsList200ResponseAnnotationsItemCircleRefNm $nm): DocAnnotationsList200ResponseAnnotationsItemCircleRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemCircleRef([
            'kind' => 'nm',
            'value' => $nm,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex $index
     * @return DocAnnotationsList200ResponseAnnotationsItemCircleRef
     */
    public static function index(DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex $index): DocAnnotationsList200ResponseAnnotationsItemCircleRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemCircleRef([
            'kind' => 'index',
            'value' => $index,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber
     */
    public function asObjectNumber(): DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber && $this->kind === 'objectNumber')) {
            throw new Exception(
                "Expected objectNumber; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNm(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCircleRefNm && $this->kind === 'nm';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemCircleRefNm
     */
    public function asNm(): DocAnnotationsList200ResponseAnnotationsItemCircleRefNm
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCircleRefNm && $this->kind === 'nm')) {
            throw new Exception(
                "Expected nm; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isIndex(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex && $this->kind === 'index';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex
     */
    public function asIndex(): DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex && $this->kind === 'index')) {
            throw new Exception(
                "Expected index; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'nm':
                $value = $this->asNm()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'index':
                $value = $this->asIndex()->jsonSerialize();
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemCircleRefObjectNumber::jsonDeserialize($data);
                break;
            case 'nm':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemCircleRefNm::jsonDeserialize($data);
                break;
            case 'index':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemCircleRefIndex::jsonDeserialize($data);
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
