<?php

namespace CloudPDF\Types;

enum DocumentsUpdate200ResponseDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
