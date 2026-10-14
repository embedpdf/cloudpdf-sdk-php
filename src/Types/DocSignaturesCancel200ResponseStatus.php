<?php

namespace CloudPDF\Types;

enum DocSignaturesCancel200ResponseStatus: string
{
    case Cancelled = "cancelled";
    case AlreadyCompleted = "already-completed";
    case Unknown = "unknown";
}
