<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination extends JsonSerializableType
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv
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
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz $xyz
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
     */
    public static function xyz(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz $xyz): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'xyz',
            'value' => $xyz,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit $fit
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
     */
    public static function fit(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit $fit): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fit',
            'value' => $fit,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH $fitH
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitH(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH $fitH): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitH',
            'value' => $fitH,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV $fitV
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitV(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV $fitV): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitV',
            'value' => $fitV,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR $fitR
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitR(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR $fitR): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitR',
            'value' => $fitR,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB $fitB
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitB(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB $fitB): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitB',
            'value' => $fitB,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh $fitBh
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitBh(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh $fitBh): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitBH',
            'value' => $fitBh,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv $fitBv
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitBv(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv $fitBv): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitBV',
            'value' => $fitBv,
        ]);
    }

    /**
     * @return bool
     */
    public function isXyz(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz && $this->kind === 'xyz';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz
     */
    public function asXyz(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz && $this->kind === 'xyz')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit && $this->kind === 'fit';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit
     */
    public function asFit(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit && $this->kind === 'fit')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH && $this->kind === 'fitH';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH
     */
    public function asFitH(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH && $this->kind === 'fitH')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV && $this->kind === 'fitV';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV
     */
    public function asFitV(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV && $this->kind === 'fitV')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR && $this->kind === 'fitR';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR
     */
    public function asFitR(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR && $this->kind === 'fitR')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB && $this->kind === 'fitB';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB
     */
    public function asFitB(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB && $this->kind === 'fitB')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh && $this->kind === 'fitBH';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh
     */
    public function asFitBh(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh && $this->kind === 'fitBH')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv && $this->kind === 'fitBV';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv
     */
    public function asFitBv(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv && $this->kind === 'fitBV')) {
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
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationXyz::jsonDeserialize($data);
                break;
            case 'fit':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFit::jsonDeserialize($data);
                break;
            case 'fitH':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitH::jsonDeserialize($data);
                break;
            case 'fitV':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitV::jsonDeserialize($data);
                break;
            case 'fitR':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitR::jsonDeserialize($data);
                break;
            case 'fitB':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitB::jsonDeserialize($data);
                break;
            case 'fitBH':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBh::jsonDeserialize($data);
                break;
            case 'fitBV':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoDestinationFitBv::jsonDeserialize($data);
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
