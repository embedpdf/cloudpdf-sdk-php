<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo extends JsonSerializableType
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
     *    DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm
     *   |DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex
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
     *    DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber
     *   |DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm
     *   |DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex
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
     * @param DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber $objectNumber
     * @return DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo
     */
    public static function objectNumber(DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber $objectNumber): DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm $nm
     * @return DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo
     */
    public static function nm(DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm $nm): DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo([
            'kind' => 'nm',
            'value' => $nm,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex $index
     * @return DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo
     */
    public static function index(DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex $index): DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo
    {
        return new DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyTo([
            'kind' => 'index',
            'value' => $index,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber
     */
    public function asObjectNumber(): DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber && $this->kind === 'objectNumber')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm && $this->kind === 'nm';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm
     */
    public function asNm(): DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm && $this->kind === 'nm')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex && $this->kind === 'index';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex
     */
    public function asIndex(): DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex && $this->kind === 'index')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToObjectNumber::jsonDeserialize($data);
                break;
            case 'nm':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToNm::jsonDeserialize($data);
                break;
            case 'index':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemFileAttachmentInReplyToIndex::jsonDeserialize($data);
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
