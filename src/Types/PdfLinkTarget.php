<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class PdfLinkTarget extends JsonSerializableType
{
    /**
     * @var (
     *    'goto'
     *   |'uri'
     *   |'goto-remote'
     *   |'launch'
     *   |'javascript'
     *   |'named'
     *   |'unsupported'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    PdfLinkTargetGoto
     *   |PdfLinkTargetUri
     *   |PdfLinkTargetGotoRemote
     *   |PdfLinkTargetLaunch
     *   |PdfLinkTargetJavascript
     *   |PdfLinkTargetNamed
     *   |PdfLinkTargetUnsupported
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'goto'
     *   |'uri'
     *   |'goto-remote'
     *   |'launch'
     *   |'javascript'
     *   |'named'
     *   |'unsupported'
     *   |'_unknown'
     * ),
     *   value: (
     *    PdfLinkTargetGoto
     *   |PdfLinkTargetUri
     *   |PdfLinkTargetGotoRemote
     *   |PdfLinkTargetLaunch
     *   |PdfLinkTargetJavascript
     *   |PdfLinkTargetNamed
     *   |PdfLinkTargetUnsupported
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
     * @param PdfLinkTargetGoto $goto
     * @return PdfLinkTarget
     */
    public static function goto(PdfLinkTargetGoto $goto): PdfLinkTarget
    {
        return new PdfLinkTarget([
            'kind' => 'goto',
            'value' => $goto,
        ]);
    }

    /**
     * @param PdfLinkTargetUri $uri
     * @return PdfLinkTarget
     */
    public static function uri(PdfLinkTargetUri $uri): PdfLinkTarget
    {
        return new PdfLinkTarget([
            'kind' => 'uri',
            'value' => $uri,
        ]);
    }

    /**
     * @param PdfLinkTargetGotoRemote $gotoRemote
     * @return PdfLinkTarget
     */
    public static function gotoRemote(PdfLinkTargetGotoRemote $gotoRemote): PdfLinkTarget
    {
        return new PdfLinkTarget([
            'kind' => 'goto-remote',
            'value' => $gotoRemote,
        ]);
    }

    /**
     * @param PdfLinkTargetLaunch $launch
     * @return PdfLinkTarget
     */
    public static function launch(PdfLinkTargetLaunch $launch): PdfLinkTarget
    {
        return new PdfLinkTarget([
            'kind' => 'launch',
            'value' => $launch,
        ]);
    }

    /**
     * @param PdfLinkTargetJavascript $javascript
     * @return PdfLinkTarget
     */
    public static function javascript(PdfLinkTargetJavascript $javascript): PdfLinkTarget
    {
        return new PdfLinkTarget([
            'kind' => 'javascript',
            'value' => $javascript,
        ]);
    }

    /**
     * @param PdfLinkTargetNamed $named
     * @return PdfLinkTarget
     */
    public static function named(PdfLinkTargetNamed $named): PdfLinkTarget
    {
        return new PdfLinkTarget([
            'kind' => 'named',
            'value' => $named,
        ]);
    }

    /**
     * @param PdfLinkTargetUnsupported $unsupported
     * @return PdfLinkTarget
     */
    public static function unsupported(PdfLinkTargetUnsupported $unsupported): PdfLinkTarget
    {
        return new PdfLinkTarget([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isGoto_(): bool
    {
        return $this->value instanceof PdfLinkTargetGoto && $this->kind === 'goto';
    }

    /**
     * @return PdfLinkTargetGoto
     */
    public function asGoto_(): PdfLinkTargetGoto
    {
        if (!($this->value instanceof PdfLinkTargetGoto && $this->kind === 'goto')) {
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
        return $this->value instanceof PdfLinkTargetUri && $this->kind === 'uri';
    }

    /**
     * @return PdfLinkTargetUri
     */
    public function asUri(): PdfLinkTargetUri
    {
        if (!($this->value instanceof PdfLinkTargetUri && $this->kind === 'uri')) {
            throw new Exception(
                "Expected uri; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGotoRemote(): bool
    {
        return $this->value instanceof PdfLinkTargetGotoRemote && $this->kind === 'goto-remote';
    }

    /**
     * @return PdfLinkTargetGotoRemote
     */
    public function asGotoRemote(): PdfLinkTargetGotoRemote
    {
        if (!($this->value instanceof PdfLinkTargetGotoRemote && $this->kind === 'goto-remote')) {
            throw new Exception(
                "Expected goto-remote; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLaunch(): bool
    {
        return $this->value instanceof PdfLinkTargetLaunch && $this->kind === 'launch';
    }

    /**
     * @return PdfLinkTargetLaunch
     */
    public function asLaunch(): PdfLinkTargetLaunch
    {
        if (!($this->value instanceof PdfLinkTargetLaunch && $this->kind === 'launch')) {
            throw new Exception(
                "Expected launch; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isJavascript(): bool
    {
        return $this->value instanceof PdfLinkTargetJavascript && $this->kind === 'javascript';
    }

    /**
     * @return PdfLinkTargetJavascript
     */
    public function asJavascript(): PdfLinkTargetJavascript
    {
        if (!($this->value instanceof PdfLinkTargetJavascript && $this->kind === 'javascript')) {
            throw new Exception(
                "Expected javascript; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNamed(): bool
    {
        return $this->value instanceof PdfLinkTargetNamed && $this->kind === 'named';
    }

    /**
     * @return PdfLinkTargetNamed
     */
    public function asNamed(): PdfLinkTargetNamed
    {
        if (!($this->value instanceof PdfLinkTargetNamed && $this->kind === 'named')) {
            throw new Exception(
                "Expected named; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnsupported(): bool
    {
        return $this->value instanceof PdfLinkTargetUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return PdfLinkTargetUnsupported
     */
    public function asUnsupported(): PdfLinkTargetUnsupported
    {
        if (!($this->value instanceof PdfLinkTargetUnsupported && $this->kind === 'unsupported')) {
            throw new Exception(
                "Expected unsupported; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'goto-remote':
                $value = $this->asGotoRemote()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'launch':
                $value = $this->asLaunch()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'javascript':
                $value = $this->asJavascript()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'named':
                $value = $this->asNamed()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'unsupported':
                $value = $this->asUnsupported()->jsonSerialize();
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
                $args['value'] = PdfLinkTargetGoto::jsonDeserialize($data);
                break;
            case 'uri':
                $args['value'] = PdfLinkTargetUri::jsonDeserialize($data);
                break;
            case 'goto-remote':
                $args['value'] = PdfLinkTargetGotoRemote::jsonDeserialize($data);
                break;
            case 'launch':
                $args['value'] = PdfLinkTargetLaunch::jsonDeserialize($data);
                break;
            case 'javascript':
                $args['value'] = PdfLinkTargetJavascript::jsonDeserialize($data);
                break;
            case 'named':
                $args['value'] = PdfLinkTargetNamed::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = PdfLinkTargetUnsupported::jsonDeserialize($data);
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
