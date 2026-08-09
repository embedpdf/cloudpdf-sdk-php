<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemInkActionsCursorEnterWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
