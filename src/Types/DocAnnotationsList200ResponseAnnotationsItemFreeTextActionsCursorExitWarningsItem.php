<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemFreeTextActionsCursorExitWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
