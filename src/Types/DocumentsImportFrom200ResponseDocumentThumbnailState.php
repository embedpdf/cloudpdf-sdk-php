<?php

namespace CloudPDF\Types;

enum DocumentsImportFrom200ResponseDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
