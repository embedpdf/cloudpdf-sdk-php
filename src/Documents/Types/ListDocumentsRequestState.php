<?php

namespace Cloudpdf\Documents\Types;

enum ListDocumentsRequestState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
