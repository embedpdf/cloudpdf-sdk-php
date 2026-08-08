<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemRedactActionsCursorEnterWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
