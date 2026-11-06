<?php

namespace CloudPDF\Types;

enum DocumentsInitResponseCreatedDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
