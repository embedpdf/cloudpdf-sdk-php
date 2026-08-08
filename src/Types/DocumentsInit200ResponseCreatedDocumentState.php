<?php

namespace Cloudpdf\Types;

enum DocumentsInit200ResponseCreatedDocumentState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
