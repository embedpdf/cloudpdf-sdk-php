<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemWidgetBlendMode: string
{
    case Normal = "normal";
    case Multiply = "multiply";
    case Screen = "screen";
    case Overlay = "overlay";
    case Darken = "darken";
    case Lighten = "lighten";
    case ColorDodge = "color-dodge";
    case ColorBurn = "color-burn";
    case HardLight = "hard-light";
    case SoftLight = "soft-light";
    case Difference = "difference";
    case Exclusion = "exclusion";
    case Hue = "hue";
    case Saturation = "saturation";
    case Color = "color";
    case Luminosity = "luminosity";
}
