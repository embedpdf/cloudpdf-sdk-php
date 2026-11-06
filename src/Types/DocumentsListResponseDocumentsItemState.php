<?php

namespace CloudPDF\Types;

enum DocumentsListResponseDocumentsItemState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
