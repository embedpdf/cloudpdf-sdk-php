<?php

namespace Cloudpdf\Types;

enum DocumentsList200ResponseDocumentsItemState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
