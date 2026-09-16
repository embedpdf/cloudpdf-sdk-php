<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocVersionsSignatures200ResponseSignaturesItemField extends JsonSerializableType
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
     *    DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber
     *   |DocVersionsSignatures200ResponseSignaturesItemFieldFqn
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
     *    DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber
     *   |DocVersionsSignatures200ResponseSignaturesItemFieldFqn
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
     * @param DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber $objectNumber
     * @return DocVersionsSignatures200ResponseSignaturesItemField
     */
    public static function objectNumber(DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber $objectNumber): DocVersionsSignatures200ResponseSignaturesItemField
    {
        return new DocVersionsSignatures200ResponseSignaturesItemField([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocVersionsSignatures200ResponseSignaturesItemFieldFqn $fqn
     * @return DocVersionsSignatures200ResponseSignaturesItemField
     */
    public static function fqn(DocVersionsSignatures200ResponseSignaturesItemFieldFqn $fqn): DocVersionsSignatures200ResponseSignaturesItemField
    {
        return new DocVersionsSignatures200ResponseSignaturesItemField([
            'kind' => 'fqn',
            'value' => $fqn,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber
     */
    public function asObjectNumber(): DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber
    {
        if (!($this->value instanceof DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber && $this->kind === 'objectNumber')) {
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
        return $this->value instanceof DocVersionsSignatures200ResponseSignaturesItemFieldFqn && $this->kind === 'fqn';
    }

    /**
     * @return DocVersionsSignatures200ResponseSignaturesItemFieldFqn
     */
    public function asFqn(): DocVersionsSignatures200ResponseSignaturesItemFieldFqn
    {
        if (!($this->value instanceof DocVersionsSignatures200ResponseSignaturesItemFieldFqn && $this->kind === 'fqn')) {
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
                $args['value'] = DocVersionsSignatures200ResponseSignaturesItemFieldObjectNumber::jsonDeserialize($data);
                break;
            case 'fqn':
                $args['value'] = DocVersionsSignatures200ResponseSignaturesItemFieldFqn::jsonDeserialize($data);
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
