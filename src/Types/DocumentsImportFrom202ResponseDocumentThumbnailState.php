<?php

namespace CloudPDF\Types;

enum DocumentsImportFrom202ResponseDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
