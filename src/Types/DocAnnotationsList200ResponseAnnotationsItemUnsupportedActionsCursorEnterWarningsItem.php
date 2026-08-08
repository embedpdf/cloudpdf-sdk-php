<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemUnsupportedActionsCursorEnterWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
