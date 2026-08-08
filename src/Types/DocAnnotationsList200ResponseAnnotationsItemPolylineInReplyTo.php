<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo extends JsonSerializableType
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
     *    DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm
     *   |DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex
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
     *    DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm
     *   |DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex
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
     * @param DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber $objectNumber
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo
     */
    public static function objectNumber(DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber $objectNumber): DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm $nm
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo
     */
    public static function nm(DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm $nm): DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo([
            'kind' => 'nm',
            'value' => $nm,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex $index
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo
     */
    public static function index(DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex $index): DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyTo([
            'kind' => 'index',
            'value' => $index,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber
     */
    public function asObjectNumber(): DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber && $this->kind === 'objectNumber')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm && $this->kind === 'nm';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm
     */
    public function asNm(): DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm && $this->kind === 'nm')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex && $this->kind === 'index';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex
     */
    public function asIndex(): DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex && $this->kind === 'index')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToObjectNumber::jsonDeserialize($data);
                break;
            case 'nm':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToNm::jsonDeserialize($data);
                break;
            case 'index':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemPolylineInReplyToIndex::jsonDeserialize($data);
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
