<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsPageCloseWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
