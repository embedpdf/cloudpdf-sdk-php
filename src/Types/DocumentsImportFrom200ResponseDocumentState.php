<?php

namespace CloudPDF\Types;

enum DocumentsImportFrom200ResponseDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
