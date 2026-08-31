<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget extends JsonSerializableType
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported
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
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto $goto
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
     */
    public static function goto(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto $goto): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget([
            'kind' => 'goto',
            'value' => $goto,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri $uri
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
     */
    public static function uri(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri $uri): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget([
            'kind' => 'uri',
            'value' => $uri,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote $gotoRemote
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
     */
    public static function gotoRemote(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote $gotoRemote): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget([
            'kind' => 'goto-remote',
            'value' => $gotoRemote,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch $launch
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
     */
    public static function launch(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch $launch): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget([
            'kind' => 'launch',
            'value' => $launch,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript $javascript
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
     */
    public static function javascript(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript $javascript): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget([
            'kind' => 'javascript',
            'value' => $javascript,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed $named
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
     */
    public static function named(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed $named): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget([
            'kind' => 'named',
            'value' => $named,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported $unsupported
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
     */
    public static function unsupported(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported $unsupported): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTarget([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isGoto_(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto && $this->kind === 'goto';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto
     */
    public function asGoto_(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto && $this->kind === 'goto')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri && $this->kind === 'uri';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri
     */
    public function asUri(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri && $this->kind === 'uri')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote && $this->kind === 'goto-remote';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote
     */
    public function asGotoRemote(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote && $this->kind === 'goto-remote')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch && $this->kind === 'launch';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch
     */
    public function asLaunch(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch && $this->kind === 'launch')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript && $this->kind === 'javascript';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript
     */
    public function asJavascript(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript && $this->kind === 'javascript')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed && $this->kind === 'named';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed
     */
    public function asNamed(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed && $this->kind === 'named')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported
     */
    public function asUnsupported(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGoto::jsonDeserialize($data);
                break;
            case 'uri':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUri::jsonDeserialize($data);
                break;
            case 'goto-remote':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetGotoRemote::jsonDeserialize($data);
                break;
            case 'launch':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetLaunch::jsonDeserialize($data);
                break;
            case 'javascript':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetJavascript::jsonDeserialize($data);
                break;
            case 'named':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetNamed::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLinkTargetUnsupported::jsonDeserialize($data);
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
