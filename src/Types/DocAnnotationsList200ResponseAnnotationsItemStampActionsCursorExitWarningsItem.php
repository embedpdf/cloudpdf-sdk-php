<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemStampActionsCursorExitWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
