<?php

namespace CloudPDF\Types;

enum DocumentsGetResponseDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
