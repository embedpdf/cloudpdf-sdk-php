<?php

namespace CloudPDF\Types;

enum DocumentsList200ResponseDocumentsItemThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
