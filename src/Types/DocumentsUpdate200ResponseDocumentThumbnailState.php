<?php

namespace CloudPDF\Types;

enum DocumentsUpdate200ResponseDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
