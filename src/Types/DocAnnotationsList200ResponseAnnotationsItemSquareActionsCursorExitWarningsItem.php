<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemSquareActionsCursorExitWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
