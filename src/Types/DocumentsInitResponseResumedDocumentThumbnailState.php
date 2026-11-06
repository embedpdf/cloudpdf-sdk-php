<?php

namespace CloudPDF\Types;

enum DocumentsInitResponseResumedDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
