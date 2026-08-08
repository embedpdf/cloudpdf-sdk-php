<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo extends JsonSerializableType
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
     *    DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm
     *   |DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex
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
     *    DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm
     *   |DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex
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
     * @param DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber $objectNumber
     * @return DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo
     */
    public static function objectNumber(DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber $objectNumber): DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm $nm
     * @return DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo
     */
    public static function nm(DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm $nm): DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo([
            'kind' => 'nm',
            'value' => $nm,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex $index
     * @return DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo
     */
    public static function index(DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex $index): DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemTextInReplyTo([
            'kind' => 'index',
            'value' => $index,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber
     */
    public function asObjectNumber(): DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber && $this->kind === 'objectNumber')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm && $this->kind === 'nm';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm
     */
    public function asNm(): DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm && $this->kind === 'nm')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex && $this->kind === 'index';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex
     */
    public function asIndex(): DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex && $this->kind === 'index')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemTextInReplyToObjectNumber::jsonDeserialize($data);
                break;
            case 'nm':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemTextInReplyToNm::jsonDeserialize($data);
                break;
            case 'index':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemTextInReplyToIndex::jsonDeserialize($data);
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
