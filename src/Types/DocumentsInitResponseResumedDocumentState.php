<?php

namespace CloudPDF\Types;

enum DocumentsInitResponseResumedDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
