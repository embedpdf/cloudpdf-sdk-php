<?php

namespace CloudPDF\Types;

enum DocumentsInitResponseCreatedDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
