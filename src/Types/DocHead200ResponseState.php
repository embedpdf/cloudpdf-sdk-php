<?php

namespace Cloudpdf\Types;

enum DocHead200ResponseState: string
{
    case Pending = "pending";
    case Ready = "ready";
    case Failed = "failed";
    case Deleting = "deleting";
}
