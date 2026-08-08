<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemFreeTextLineEnding: string
{
    case None = "none";
    case Square = "square";
    case Circle = "circle";
    case Diamond = "diamond";
    case OpenArrow = "open-arrow";
    case ClosedArrow = "closed-arrow";
    case Butt = "butt";
    case ROpenArrow = "r-open-arrow";
    case RClosedArrow = "r-closed-arrow";
    case Slash = "slash";
}
