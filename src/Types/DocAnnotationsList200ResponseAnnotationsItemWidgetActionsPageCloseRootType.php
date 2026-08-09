<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemWidgetActionsPageCloseRootType: string
{
    case Unknown = "unknown";
    case Goto_ = "goto";
    case GotoRemote = "goto-remote";
    case GotoEmbedded = "goto-embedded";
    case Launch = "launch";
    case Thread = "thread";
    case Uri = "uri";
    case Sound = "sound";
    case Movie = "movie";
    case Hide = "hide";
    case Named = "named";
    case SubmitForm = "submit-form";
    case ResetForm = "reset-form";
    case ImportData = "import-data";
    case Javascript = "javascript";
    case SetOcgState = "set-ocg-state";
    case Rendition = "rendition";
    case Transition = "transition";
    case Goto3DView = "goto-3d-view";
}
