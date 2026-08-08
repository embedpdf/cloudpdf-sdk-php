<?php

namespace Cloudpdf\Types;

enum DocumentsInit200ResponseDedupedDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
