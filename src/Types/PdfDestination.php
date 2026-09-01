<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class PdfDestination extends JsonSerializableType
{
    /**
     * @var (
     *    'xyz'
     *   |'fit'
     *   |'fitH'
     *   |'fitV'
     *   |'fitR'
     *   |'fitB'
     *   |'fitBH'
     *   |'fitBV'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    PdfDestinationXyz
     *   |PdfDestinationFit
     *   |PdfDestinationFitH
     *   |PdfDestinationFitV
     *   |PdfDestinationFitR
     *   |PdfDestinationFitB
     *   |PdfDestinationFitBh
     *   |PdfDestinationFitBv
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'xyz'
     *   |'fit'
     *   |'fitH'
     *   |'fitV'
     *   |'fitR'
     *   |'fitB'
     *   |'fitBH'
     *   |'fitBV'
     *   |'_unknown'
     * ),
     *   value: (
     *    PdfDestinationXyz
     *   |PdfDestinationFit
     *   |PdfDestinationFitH
     *   |PdfDestinationFitV
     *   |PdfDestinationFitR
     *   |PdfDestinationFitB
     *   |PdfDestinationFitBh
     *   |PdfDestinationFitBv
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
     * @param PdfDestinationXyz $xyz
     * @return PdfDestination
     */
    public static function xyz(PdfDestinationXyz $xyz): PdfDestination
    {
        return new PdfDestination([
            'kind' => 'xyz',
            'value' => $xyz,
        ]);
    }

    /**
     * @param PdfDestinationFit $fit
     * @return PdfDestination
     */
    public static function fit(PdfDestinationFit $fit): PdfDestination
    {
        return new PdfDestination([
            'kind' => 'fit',
            'value' => $fit,
        ]);
    }

    /**
     * @param PdfDestinationFitH $fitH
     * @return PdfDestination
     */
    public static function fitH(PdfDestinationFitH $fitH): PdfDestination
    {
        return new PdfDestination([
            'kind' => 'fitH',
            'value' => $fitH,
        ]);
    }

    /**
     * @param PdfDestinationFitV $fitV
     * @return PdfDestination
     */
    public static function fitV(PdfDestinationFitV $fitV): PdfDestination
    {
        return new PdfDestination([
            'kind' => 'fitV',
            'value' => $fitV,
        ]);
    }

    /**
     * @param PdfDestinationFitR $fitR
     * @return PdfDestination
     */
    public static function fitR(PdfDestinationFitR $fitR): PdfDestination
    {
        return new PdfDestination([
            'kind' => 'fitR',
            'value' => $fitR,
        ]);
    }

    /**
     * @param PdfDestinationFitB $fitB
     * @return PdfDestination
     */
    public static function fitB(PdfDestinationFitB $fitB): PdfDestination
    {
        return new PdfDestination([
            'kind' => 'fitB',
            'value' => $fitB,
        ]);
    }

    /**
     * @param PdfDestinationFitBh $fitBh
     * @return PdfDestination
     */
    public static function fitBh(PdfDestinationFitBh $fitBh): PdfDestination
    {
        return new PdfDestination([
            'kind' => 'fitBH',
            'value' => $fitBh,
        ]);
    }

    /**
     * @param PdfDestinationFitBv $fitBv
     * @return PdfDestination
     */
    public static function fitBv(PdfDestinationFitBv $fitBv): PdfDestination
    {
        return new PdfDestination([
            'kind' => 'fitBV',
            'value' => $fitBv,
        ]);
    }

    /**
     * @return bool
     */
    public function isXyz(): bool
    {
        return $this->value instanceof PdfDestinationXyz && $this->kind === 'xyz';
    }

    /**
     * @return PdfDestinationXyz
     */
    public function asXyz(): PdfDestinationXyz
    {
        if (!($this->value instanceof PdfDestinationXyz && $this->kind === 'xyz')) {
            throw new Exception(
                "Expected xyz; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFit(): bool
    {
        return $this->value instanceof PdfDestinationFit && $this->kind === 'fit';
    }

    /**
     * @return PdfDestinationFit
     */
    public function asFit(): PdfDestinationFit
    {
        if (!($this->value instanceof PdfDestinationFit && $this->kind === 'fit')) {
            throw new Exception(
                "Expected fit; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFitH(): bool
    {
        return $this->value instanceof PdfDestinationFitH && $this->kind === 'fitH';
    }

    /**
     * @return PdfDestinationFitH
     */
    public function asFitH(): PdfDestinationFitH
    {
        if (!($this->value instanceof PdfDestinationFitH && $this->kind === 'fitH')) {
            throw new Exception(
                "Expected fitH; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFitV(): bool
    {
        return $this->value instanceof PdfDestinationFitV && $this->kind === 'fitV';
    }

    /**
     * @return PdfDestinationFitV
     */
    public function asFitV(): PdfDestinationFitV
    {
        if (!($this->value instanceof PdfDestinationFitV && $this->kind === 'fitV')) {
            throw new Exception(
                "Expected fitV; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFitR(): bool
    {
        return $this->value instanceof PdfDestinationFitR && $this->kind === 'fitR';
    }

    /**
     * @return PdfDestinationFitR
     */
    public function asFitR(): PdfDestinationFitR
    {
        if (!($this->value instanceof PdfDestinationFitR && $this->kind === 'fitR')) {
            throw new Exception(
                "Expected fitR; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFitB(): bool
    {
        return $this->value instanceof PdfDestinationFitB && $this->kind === 'fitB';
    }

    /**
     * @return PdfDestinationFitB
     */
    public function asFitB(): PdfDestinationFitB
    {
        if (!($this->value instanceof PdfDestinationFitB && $this->kind === 'fitB')) {
            throw new Exception(
                "Expected fitB; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFitBh(): bool
    {
        return $this->value instanceof PdfDestinationFitBh && $this->kind === 'fitBH';
    }

    /**
     * @return PdfDestinationFitBh
     */
    public function asFitBh(): PdfDestinationFitBh
    {
        if (!($this->value instanceof PdfDestinationFitBh && $this->kind === 'fitBH')) {
            throw new Exception(
                "Expected fitBH; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFitBv(): bool
    {
        return $this->value instanceof PdfDestinationFitBv && $this->kind === 'fitBV';
    }

    /**
     * @return PdfDestinationFitBv
     */
    public function asFitBv(): PdfDestinationFitBv
    {
        if (!($this->value instanceof PdfDestinationFitBv && $this->kind === 'fitBV')) {
            throw new Exception(
                "Expected fitBV; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'xyz':
                $value = $this->asXyz()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'fit':
                $value = $this->asFit()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'fitH':
                $value = $this->asFitH()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'fitV':
                $value = $this->asFitV()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'fitR':
                $value = $this->asFitR()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'fitB':
                $value = $this->asFitB()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'fitBH':
                $value = $this->asFitBh()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'fitBV':
                $value = $this->asFitBv()->jsonSerialize();
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
            case 'xyz':
                $args['value'] = PdfDestinationXyz::jsonDeserialize($data);
                break;
            case 'fit':
                $args['value'] = PdfDestinationFit::jsonDeserialize($data);
                break;
            case 'fitH':
                $args['value'] = PdfDestinationFitH::jsonDeserialize($data);
                break;
            case 'fitV':
                $args['value'] = PdfDestinationFitV::jsonDeserialize($data);
                break;
            case 'fitR':
                $args['value'] = PdfDestinationFitR::jsonDeserialize($data);
                break;
            case 'fitB':
                $args['value'] = PdfDestinationFitB::jsonDeserialize($data);
                break;
            case 'fitBH':
                $args['value'] = PdfDestinationFitBh::jsonDeserialize($data);
                break;
            case 'fitBV':
                $args['value'] = PdfDestinationFitBv::jsonDeserialize($data);
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
