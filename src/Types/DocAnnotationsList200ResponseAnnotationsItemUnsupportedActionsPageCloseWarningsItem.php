<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemUnsupportedActionsPageCloseWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
