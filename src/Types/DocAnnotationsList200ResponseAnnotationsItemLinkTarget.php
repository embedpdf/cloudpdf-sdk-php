<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItemLinkTarget extends JsonSerializableType
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
     *    DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported
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
     *    DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed
     *   |DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported
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
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto $goto
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTarget
     */
    public static function goto(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto $goto): DocAnnotationsList200ResponseAnnotationsItemLinkTarget
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTarget([
            'kind' => 'goto',
            'value' => $goto,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri $uri
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTarget
     */
    public static function uri(DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri $uri): DocAnnotationsList200ResponseAnnotationsItemLinkTarget
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTarget([
            'kind' => 'uri',
            'value' => $uri,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote $gotoRemote
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTarget
     */
    public static function gotoRemote(DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote $gotoRemote): DocAnnotationsList200ResponseAnnotationsItemLinkTarget
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTarget([
            'kind' => 'goto-remote',
            'value' => $gotoRemote,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch $launch
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTarget
     */
    public static function launch(DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch $launch): DocAnnotationsList200ResponseAnnotationsItemLinkTarget
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTarget([
            'kind' => 'launch',
            'value' => $launch,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript $javascript
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTarget
     */
    public static function javascript(DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript $javascript): DocAnnotationsList200ResponseAnnotationsItemLinkTarget
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTarget([
            'kind' => 'javascript',
            'value' => $javascript,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed $named
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTarget
     */
    public static function named(DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed $named): DocAnnotationsList200ResponseAnnotationsItemLinkTarget
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTarget([
            'kind' => 'named',
            'value' => $named,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported $unsupported
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTarget
     */
    public static function unsupported(DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported $unsupported): DocAnnotationsList200ResponseAnnotationsItemLinkTarget
    {
        return new DocAnnotationsList200ResponseAnnotationsItemLinkTarget([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isGoto_(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto && $this->kind === 'goto';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto
     */
    public function asGoto_(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto && $this->kind === 'goto')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri && $this->kind === 'uri';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri
     */
    public function asUri(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri && $this->kind === 'uri')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote && $this->kind === 'goto-remote';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote
     */
    public function asGotoRemote(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote && $this->kind === 'goto-remote')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch && $this->kind === 'launch';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch
     */
    public function asLaunch(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch && $this->kind === 'launch')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript && $this->kind === 'javascript';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript
     */
    public function asJavascript(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript && $this->kind === 'javascript')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed && $this->kind === 'named';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed
     */
    public function asNamed(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed && $this->kind === 'named')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported
     */
    public function asUnsupported(): DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto::jsonDeserialize($data);
                break;
            case 'uri':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetUri::jsonDeserialize($data);
                break;
            case 'goto-remote':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetGotoRemote::jsonDeserialize($data);
                break;
            case 'launch':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetLaunch::jsonDeserialize($data);
                break;
            case 'javascript':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetJavascript::jsonDeserialize($data);
                break;
            case 'named':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetNamed::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLinkTargetUnsupported::jsonDeserialize($data);
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
