<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemLineRef extends JsonSerializableType
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
     *    DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemLineRefNm
     *   |DocAnnotationsList200ResponseAnnotationsItemLineRefIndex
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
     *    DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemLineRefNm
     *   |DocAnnotationsList200ResponseAnnotationsItemLineRefIndex
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
     * @param DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber $objectNumber
     * @return DocAnnotationsList200ResponseAnnotationsItemLineRef
     */
    public static function objectNumber(DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber $objectNumber): DocAnnotationsList200ResponseAnnotationsItemLineRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLineRef([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLineRefNm $nm
     * @return DocAnnotationsList200ResponseAnnotationsItemLineRef
     */
    public static function nm(DocAnnotationsList200ResponseAnnotationsItemLineRefNm $nm): DocAnnotationsList200ResponseAnnotationsItemLineRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLineRef([
            'kind' => 'nm',
            'value' => $nm,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLineRefIndex $index
     * @return DocAnnotationsList200ResponseAnnotationsItemLineRef
     */
    public static function index(DocAnnotationsList200ResponseAnnotationsItemLineRefIndex $index): DocAnnotationsList200ResponseAnnotationsItemLineRef
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLineRef([
            'kind' => 'index',
            'value' => $index,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber
     */
    public function asObjectNumber(): DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber && $this->kind === 'objectNumber')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineRefNm && $this->kind === 'nm';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLineRefNm
     */
    public function asNm(): DocAnnotationsList200ResponseAnnotationsItemLineRefNm
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineRefNm && $this->kind === 'nm')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineRefIndex && $this->kind === 'index';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLineRefIndex
     */
    public function asIndex(): DocAnnotationsList200ResponseAnnotationsItemLineRefIndex
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLineRefIndex && $this->kind === 'index')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLineRefObjectNumber::jsonDeserialize($data);
                break;
            case 'nm':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLineRefNm::jsonDeserialize($data);
                break;
            case 'index':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLineRefIndex::jsonDeserialize($data);
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
