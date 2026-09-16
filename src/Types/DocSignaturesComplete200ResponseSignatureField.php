<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocSignaturesComplete200ResponseSignatureField extends JsonSerializableType
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
     *    DocSignaturesComplete200ResponseSignatureFieldObjectNumber
     *   |DocSignaturesComplete200ResponseSignatureFieldFqn
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
     *    DocSignaturesComplete200ResponseSignatureFieldObjectNumber
     *   |DocSignaturesComplete200ResponseSignatureFieldFqn
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
     * @param DocSignaturesComplete200ResponseSignatureFieldObjectNumber $objectNumber
     * @return DocSignaturesComplete200ResponseSignatureField
     */
    public static function objectNumber(DocSignaturesComplete200ResponseSignatureFieldObjectNumber $objectNumber): DocSignaturesComplete200ResponseSignatureField
    {
        return new DocSignaturesComplete200ResponseSignatureField([
            'kind' => 'objectNumber',
            'value' => $objectNumber,
        ]);
    }

    /**
     * @param DocSignaturesComplete200ResponseSignatureFieldFqn $fqn
     * @return DocSignaturesComplete200ResponseSignatureField
     */
    public static function fqn(DocSignaturesComplete200ResponseSignatureFieldFqn $fqn): DocSignaturesComplete200ResponseSignatureField
    {
        return new DocSignaturesComplete200ResponseSignatureField([
            'kind' => 'fqn',
            'value' => $fqn,
        ]);
    }

    /**
     * @return bool
     */
    public function isObjectNumber(): bool
    {
        return $this->value instanceof DocSignaturesComplete200ResponseSignatureFieldObjectNumber && $this->kind === 'objectNumber';
    }

    /**
     * @return DocSignaturesComplete200ResponseSignatureFieldObjectNumber
     */
    public function asObjectNumber(): DocSignaturesComplete200ResponseSignatureFieldObjectNumber
    {
        if (!($this->value instanceof DocSignaturesComplete200ResponseSignatureFieldObjectNumber && $this->kind === 'objectNumber')) {
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
        return $this->value instanceof DocSignaturesComplete200ResponseSignatureFieldFqn && $this->kind === 'fqn';
    }

    /**
     * @return DocSignaturesComplete200ResponseSignatureFieldFqn
     */
    public function asFqn(): DocSignaturesComplete200ResponseSignatureFieldFqn
    {
        if (!($this->value instanceof DocSignaturesComplete200ResponseSignatureFieldFqn && $this->kind === 'fqn')) {
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
                $args['value'] = DocSignaturesComplete200ResponseSignatureFieldObjectNumber::jsonDeserialize($data);
                break;
            case 'fqn':
                $args['value'] = DocSignaturesComplete200ResponseSignatureFieldFqn::jsonDeserialize($data);
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
