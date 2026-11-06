<?php

namespace CloudPDF\Types;

enum DocumentsListResponseDocumentsItemThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
