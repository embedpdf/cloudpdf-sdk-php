<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class PdfActionTargetRef extends JsonSerializableType
{
    /**
     * @var (
     *    'name'
     *   |'objectNumber'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    PdfActionTargetRefName
     *   |PdfActionTargetRefObjectNumber
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'name'
     *   |'objectNumber'
     *   |'_unknown'
     * ),
     *   value: (
     *    PdfActionTargetRefName
     *   |PdfActionTargetRefObjectNumber
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
     * @param PdfActionTargetRefName $name
     * @return PdfActionTargetRef
     */
    public static function name(PdfActionTargetRefName $name): PdfActionTargetRef
    {
        return new PdfActionTargetRef([
            'kind' => 'name',
            'value' => $name,
        ]);
    }

    /**
     * @param PdfActionTargetRefObjectNumber $objectNumber
     * @return PdfActionTargetRef
     */
    public static function objectNumber(PdfActionTargetRefObjectNumber $objectNumber): PdfActionTargetRef
    {
        return new PdfActionTargetRef([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @return bool
     */
    public function isName(): bool
    {
        return $this->value instanceof PdfActionTargetRefName && $this->kind === 'name';
    }

    /**
     * @return PdfActionTargetRefName
     */
    public function asName(): PdfActionTargetRefName
    {
        if (!($this->value instanceof PdfActionTargetRefName && $this->kind === 'name')) {
            throw new Exception(
                "Expected name; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof PdfActionTargetRefObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return PdfActionTargetRefObjectNumber
     */
    public function asObjectNumber(): PdfActionTargetRefObjectNumber
    {
        if (!($this->value instanceof PdfActionTargetRefObjectNumber && $this->kind === 'objectNumber')) {
            throw new Exception(
                "Expected objectNumber; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'name':
                $value = $this->asName()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'objectNumber':
                $value = $this->asObjectNumber()->jsonSerialize();
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
            case 'name':
                $args['value'] = PdfActionTargetRefName::jsonDeserialize($data);
                break;
            case 'objectNumber':
                $args['value'] = PdfActionTargetRefObjectNumber::jsonDeserialize($data);
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
