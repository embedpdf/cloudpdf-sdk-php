<?php

namespace CloudPDF\Types;

enum DocumentsInitResponseDedupedDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
