<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemStrikeoutActionsCursorExitWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
