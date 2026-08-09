<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemHighlightRef extends JsonSerializableType
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
     *    DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm
     *   |DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex
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
     *    DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm
     *   |DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex
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
     * @param DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber $objectNumber
     * @return DocAnnotationsList200ResponseAnnotationsItemHighlightRef
     */
    public static function objectNumber(DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber $objectNumber): DocAnnotationsList200ResponseAnnotationsItemHighlightRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemHighlightRef([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm $nm
     * @return DocAnnotationsList200ResponseAnnotationsItemHighlightRef
     */
    public static function nm(DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm $nm): DocAnnotationsList200ResponseAnnotationsItemHighlightRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemHighlightRef([
            'kind' => 'nm',
            'value' => $nm,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex $index
     * @return DocAnnotationsList200ResponseAnnotationsItemHighlightRef
     */
    public static function index(DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex $index): DocAnnotationsList200ResponseAnnotationsItemHighlightRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemHighlightRef([
            'kind' => 'index',
            'value' => $index,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber
     */
    public function asObjectNumber(): DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber && $this->kind === 'objectNumber')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm && $this->kind === 'nm';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm
     */
    public function asNm(): DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm && $this->kind === 'nm')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex && $this->kind === 'index';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex
     */
    public function asIndex(): DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex && $this->kind === 'index')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemHighlightRefObjectNumber::jsonDeserialize($data);
                break;
            case 'nm':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemHighlightRefNm::jsonDeserialize($data);
                break;
            case 'index':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemHighlightRefIndex::jsonDeserialize($data);
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
