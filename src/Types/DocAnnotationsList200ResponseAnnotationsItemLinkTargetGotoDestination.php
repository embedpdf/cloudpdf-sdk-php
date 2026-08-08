<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination extends JsonSerializableType
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
     *    DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv
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
     *    DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv
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
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz $xyz
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
     */
    public static function xyz(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz $xyz): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'xyz',
            'value' => $xyz,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit $fit
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
     */
    public static function fit(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit $fit): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fit',
            'value' => $fit,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH $fitH
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitH(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH $fitH): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitH',
            'value' => $fitH,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV $fitV
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitV(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV $fitV): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitV',
            'value' => $fitV,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR $fitR
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitR(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR $fitR): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitR',
            'value' => $fitR,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB $fitB
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitB(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB $fitB): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitB',
            'value' => $fitB,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh $fitBh
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitBh(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh $fitBh): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitBH',
            'value' => $fitBh,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv $fitBv
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
     */
    public static function fitBv(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv $fitBv): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestination([
            'kind' => 'fitBV',
            'value' => $fitBv,
        ]);
    }

    /**
     * @return bool
     */
    public function isXyz(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz && $this->kind === 'xyz';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz
     */
    public function asXyz(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz && $this->kind === 'xyz')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit && $this->kind === 'fit';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit
     */
    public function asFit(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit && $this->kind === 'fit')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH && $this->kind === 'fitH';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH
     */
    public function asFitH(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH && $this->kind === 'fitH')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV && $this->kind === 'fitV';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV
     */
    public function asFitV(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV && $this->kind === 'fitV')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR && $this->kind === 'fitR';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR
     */
    public function asFitR(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR && $this->kind === 'fitR')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB && $this->kind === 'fitB';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB
     */
    public function asFitB(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB && $this->kind === 'fitB')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh && $this->kind === 'fitBH';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh
     */
    public function asFitBh(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh && $this->kind === 'fitBH')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv && $this->kind === 'fitBV';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv
     */
    public function asFitBv(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv && $this->kind === 'fitBV')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationXyz::jsonDeserialize($data);
                break;
            case 'fit':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFit::jsonDeserialize($data);
                break;
            case 'fitH':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitH::jsonDeserialize($data);
                break;
            case 'fitV':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitV::jsonDeserialize($data);
                break;
            case 'fitR':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitR::jsonDeserialize($data);
                break;
            case 'fitB':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitB::jsonDeserialize($data);
                break;
            case 'fitBH':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBh::jsonDeserialize($data);
                break;
            case 'fitBV':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoDestinationFitBv::jsonDeserialize($data);
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
