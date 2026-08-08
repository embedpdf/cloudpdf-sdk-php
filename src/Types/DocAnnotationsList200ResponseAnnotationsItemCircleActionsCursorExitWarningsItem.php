<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemCircleActionsCursorExitWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
