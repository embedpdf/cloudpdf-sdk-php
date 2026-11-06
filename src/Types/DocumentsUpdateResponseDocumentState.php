<?php

namespace CloudPDF\Types;

enum DocumentsUpdateResponseDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
