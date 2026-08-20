<?php

namespace CloudPDF\Types;

enum DocumentsImportFrom202ResponseDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
