<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class PageDestination extends JsonSerializableType
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
     *    PageDestinationXyz
     *   |PageDestinationFit
     *   |PageDestinationFitH
     *   |PageDestinationFitV
     *   |PageDestinationFitR
     *   |PageDestinationFitB
     *   |PageDestinationFitBh
     *   |PageDestinationFitBv
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
     *    PageDestinationXyz
     *   |PageDestinationFit
     *   |PageDestinationFitH
     *   |PageDestinationFitV
     *   |PageDestinationFitR
     *   |PageDestinationFitB
     *   |PageDestinationFitBh
     *   |PageDestinationFitBv
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
     * @param PageDestinationXyz $xyz
     * @return PageDestination
     */
    public static function xyz(PageDestinationXyz $xyz): PageDestination
    {
        return new PageDestination([
            'kind' => 'xyz',
            'value' => $xyz,
        ]);
    }

    /**
     * @param PageDestinationFit $fit
     * @return PageDestination
     */
    public static function fit(PageDestinationFit $fit): PageDestination
    {
        return new PageDestination([
            'kind' => 'fit',
            'value' => $fit,
        ]);
    }

    /**
     * @param PageDestinationFitH $fitH
     * @return PageDestination
     */
    public static function fitH(PageDestinationFitH $fitH): PageDestination
    {
        return new PageDestination([
            'kind' => 'fitH',
            'value' => $fitH,
        ]);
    }

    /**
     * @param PageDestinationFitV $fitV
     * @return PageDestination
     */
    public static function fitV(PageDestinationFitV $fitV): PageDestination
    {
        return new PageDestination([
            'kind' => 'fitV',
            'value' => $fitV,
        ]);
    }

    /**
     * @param PageDestinationFitR $fitR
     * @return PageDestination
     */
    public static function fitR(PageDestinationFitR $fitR): PageDestination
    {
        return new PageDestination([
            'kind' => 'fitR',
            'value' => $fitR,
        ]);
    }

    /**
     * @param PageDestinationFitB $fitB
     * @return PageDestination
     */
    public static function fitB(PageDestinationFitB $fitB): PageDestination
    {
        return new PageDestination([
            'kind' => 'fitB',
            'value' => $fitB,
        ]);
    }

    /**
     * @param PageDestinationFitBh $fitBh
     * @return PageDestination
     */
    public static function fitBh(PageDestinationFitBh $fitBh): PageDestination
    {
        return new PageDestination([
            'kind' => 'fitBH',
            'value' => $fitBh,
        ]);
    }

    /**
     * @param PageDestinationFitBv $fitBv
     * @return PageDestination
     */
    public static function fitBv(PageDestinationFitBv $fitBv): PageDestination
    {
        return new PageDestination([
            'kind' => 'fitBV',
            'value' => $fitBv,
        ]);
    }

    /**
     * @return bool
     */
    public function isXyz(): bool
    {
        return $this->value instanceof PageDestinationXyz && $this->kind === 'xyz';
    }

    /**
     * @return PageDestinationXyz
     */
    public function asXyz(): PageDestinationXyz
    {
        if (!($this->value instanceof PageDestinationXyz && $this->kind === 'xyz')) {
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
        return $this->value instanceof PageDestinationFit && $this->kind === 'fit';
    }

    /**
     * @return PageDestinationFit
     */
    public function asFit(): PageDestinationFit
    {
        if (!($this->value instanceof PageDestinationFit && $this->kind === 'fit')) {
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
        return $this->value instanceof PageDestinationFitH && $this->kind === 'fitH';
    }

    /**
     * @return PageDestinationFitH
     */
    public function asFitH(): PageDestinationFitH
    {
        if (!($this->value instanceof PageDestinationFitH && $this->kind === 'fitH')) {
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
        return $this->value instanceof PageDestinationFitV && $this->kind === 'fitV';
    }

    /**
     * @return PageDestinationFitV
     */
    public function asFitV(): PageDestinationFitV
    {
        if (!($this->value instanceof PageDestinationFitV && $this->kind === 'fitV')) {
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
        return $this->value instanceof PageDestinationFitR && $this->kind === 'fitR';
    }

    /**
     * @return PageDestinationFitR
     */
    public function asFitR(): PageDestinationFitR
    {
        if (!($this->value instanceof PageDestinationFitR && $this->kind === 'fitR')) {
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
        return $this->value instanceof PageDestinationFitB && $this->kind === 'fitB';
    }

    /**
     * @return PageDestinationFitB
     */
    public function asFitB(): PageDestinationFitB
    {
        if (!($this->value instanceof PageDestinationFitB && $this->kind === 'fitB')) {
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
        return $this->value instanceof PageDestinationFitBh && $this->kind === 'fitBH';
    }

    /**
     * @return PageDestinationFitBh
     */
    public function asFitBh(): PageDestinationFitBh
    {
        if (!($this->value instanceof PageDestinationFitBh && $this->kind === 'fitBH')) {
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
        return $this->value instanceof PageDestinationFitBv && $this->kind === 'fitBV';
    }

    /**
     * @return PageDestinationFitBv
     */
    public function asFitBv(): PageDestinationFitBv
    {
        if (!($this->value instanceof PageDestinationFitBv && $this->kind === 'fitBV')) {
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
                $args['value'] = PageDestinationXyz::jsonDeserialize($data);
                break;
            case 'fit':
                $args['value'] = PageDestinationFit::jsonDeserialize($data);
                break;
            case 'fitH':
                $args['value'] = PageDestinationFitH::jsonDeserialize($data);
                break;
            case 'fitV':
                $args['value'] = PageDestinationFitV::jsonDeserialize($data);
                break;
            case 'fitR':
                $args['value'] = PageDestinationFitR::jsonDeserialize($data);
                break;
            case 'fitB':
                $args['value'] = PageDestinationFitB::jsonDeserialize($data);
                break;
            case 'fitBH':
                $args['value'] = PageDestinationFitBh::jsonDeserialize($data);
                break;
            case 'fitBV':
                $args['value'] = PageDestinationFitBv::jsonDeserialize($data);
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
