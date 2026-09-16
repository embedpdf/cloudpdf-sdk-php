<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocSignaturesList200ResponseSignaturesItemField extends JsonSerializableType
{
    /**
     * @var (
     *    'objectNumber'
     *   |'fqn'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocSignaturesList200ResponseSignaturesItemFieldObjectNumber
     *   |DocSignaturesList200ResponseSignaturesItemFieldFqn
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'objectNumber'
     *   |'fqn'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocSignaturesList200ResponseSignaturesItemFieldObjectNumber
     *   |DocSignaturesList200ResponseSignaturesItemFieldFqn
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
     * @param DocSignaturesList200ResponseSignaturesItemFieldObjectNumber $objectNumber
     * @return DocSignaturesList200ResponseSignaturesItemField
     */
    public static function objectNumber(DocSignaturesList200ResponseSignaturesItemFieldObjectNumber $objectNumber): DocSignaturesList200ResponseSignaturesItemField
    {
        return new DocSignaturesList200ResponseSignaturesItemField([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocSignaturesList200ResponseSignaturesItemFieldFqn $fqn
     * @return DocSignaturesList200ResponseSignaturesItemField
     */
    public static function fqn(DocSignaturesList200ResponseSignaturesItemFieldFqn $fqn): DocSignaturesList200ResponseSignaturesItemField
    {
        return new DocSignaturesList200ResponseSignaturesItemField([
            'kind' => 'fqn',
            'value' => $fqn,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocSignaturesList200ResponseSignaturesItemFieldObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocSignaturesList200ResponseSignaturesItemFieldObjectNumber
     */
    public function asObjectNumber(): DocSignaturesList200ResponseSignaturesItemFieldObjectNumber
    {
        if (!($this->value instanceof DocSignaturesList200ResponseSignaturesItemFieldObjectNumber && $this->kind === 'objectNumber')) {
            throw new Exception(
                "Expected objectNumber; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFqn(): bool
    {
        return $this->value instanceof DocSignaturesList200ResponseSignaturesItemFieldFqn && $this->kind === 'fqn';
    }

    /**
     * @return DocSignaturesList200ResponseSignaturesItemFieldFqn
     */
    public function asFqn(): DocSignaturesList200ResponseSignaturesItemFieldFqn
    {
        if (!($this->value instanceof DocSignaturesList200ResponseSignaturesItemFieldFqn && $this->kind === 'fqn')) {
            throw new Exception(
                "Expected fqn; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'fqn':
                $value = $this->asFqn()->jsonSerialize();
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
                $args['value'] = DocSignaturesList200ResponseSignaturesItemFieldObjectNumber::jsonDeserialize($data);
                break;
            case 'fqn':
                $args['value'] = DocSignaturesList200ResponseSignaturesItemFieldFqn::jsonDeserialize($data);
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
