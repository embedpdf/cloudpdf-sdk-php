<?php

namespace Cloudpdf\Types;

enum DocumentsGet200ResponseDocumentThumbnailState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Locked = "locked";
    case Failed = "failed";
}
