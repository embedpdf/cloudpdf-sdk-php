<?php

namespace Cloudpdf\Types;

enum DocumentsInit200ResponseResumedDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
