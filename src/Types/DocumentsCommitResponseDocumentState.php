<?php

namespace CloudPDF\Types;

enum DocumentsCommitResponseDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
