<?php

namespace CloudPDF\Types;

enum DocumentsGet200ResponseDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
