<?php

namespace CloudPDF\Types;

enum DocHeadResponseState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
