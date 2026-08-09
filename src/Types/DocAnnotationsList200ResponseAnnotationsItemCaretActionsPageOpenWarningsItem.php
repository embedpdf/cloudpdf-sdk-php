<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemCaretActionsPageOpenWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
