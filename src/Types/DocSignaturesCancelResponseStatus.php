<?php

namespace CloudPDF\Types;

enum DocSignaturesCancelResponseStatus: string
{
    case Cancelled = "cancelled";
    case AlreadyCompleted = "already-completed";
    case Unknown = "unknown";
}
