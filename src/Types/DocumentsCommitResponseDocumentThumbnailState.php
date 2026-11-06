<?php

namespace CloudPDF\Types;

enum DocumentsCommitResponseDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
