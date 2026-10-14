<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class PdfLinkTargetWritable extends JsonSerializableType
{
    /**
     * @var (
     *    'goto'
     *   |'uri'
     *   |'named'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    PdfLinkTargetWritableGoto
     *   |PdfLinkTargetWritableUri
     *   |PdfLinkTargetWritableNamed
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'goto'
     *   |'uri'
     *   |'named'
     *   |'_unknown'
     * ),
     *   value: (
     *    PdfLinkTargetWritableGoto
     *   |PdfLinkTargetWritableUri
     *   |PdfLinkTargetWritableNamed
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
     * @param PdfLinkTargetWritableGoto $goto
     * @return PdfLinkTargetWritable
     */
    public static function goto(PdfLinkTargetWritableGoto $goto): PdfLinkTargetWritable
    {
        return new PdfLinkTargetWritable([
            'kind' => 'goto',
            'value' => $goto,
        ]);
    }

    /**
     * @param PdfLinkTargetWritableUri $uri
     * @return PdfLinkTargetWritable
     */
    public static function uri(PdfLinkTargetWritableUri $uri): PdfLinkTargetWritable
    {
        return new PdfLinkTargetWritable([
            'kind' => 'uri',
            'value' => $uri,
        ]);
    }

    /**
     * @param PdfLinkTargetWritableNamed $named
     * @return PdfLinkTargetWritable
     */
    public static function named(PdfLinkTargetWritableNamed $named): PdfLinkTargetWritable
    {
        return new PdfLinkTargetWritable([
            'kind' => 'named',
            'value' => $named,
        ]);
    }

    /**
     * @return bool
     */
    public function isGoto_(): bool
    {
        return $this->value instanceof PdfLinkTargetWritableGoto && $this->kind === 'goto';
    }

    /**
     * @return PdfLinkTargetWritableGoto
     */
    public function asGoto_(): PdfLinkTargetWritableGoto
    {
        if (!($this->value instanceof PdfLinkTargetWritableGoto && $this->kind === 'goto')) {
            throw new Exception(
                "Expected goto; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUri(): bool
    {
        return $this->value instanceof PdfLinkTargetWritableUri && $this->kind === 'uri';
    }

    /**
     * @return PdfLinkTargetWritableUri
     */
    public function asUri(): PdfLinkTargetWritableUri
    {
        if (!($this->value instanceof PdfLinkTargetWritableUri && $this->kind === 'uri')) {
            throw new Exception(
                "Expected uri; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNamed(): bool
    {
        return $this->value instanceof PdfLinkTargetWritableNamed && $this->kind === 'named';
    }

    /**
     * @return PdfLinkTargetWritableNamed
     */
    public function asNamed(): PdfLinkTargetWritableNamed
    {
        if (!($this->value instanceof PdfLinkTargetWritableNamed && $this->kind === 'named')) {
            throw new Exception(
                "Expected named; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'goto':
                $value = $this->asGoto_()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'uri':
                $value = $this->asUri()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'named':
                $value = $this->asNamed()->jsonSerialize();
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
            case 'goto':
                $args['value'] = PdfLinkTargetWritableGoto::jsonDeserialize($data);
                break;
            case 'uri':
                $args['value'] = PdfLinkTargetWritableUri::jsonDeserialize($data);
                break;
            case 'named':
                $args['value'] = PdfLinkTargetWritableNamed::jsonDeserialize($data);
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
