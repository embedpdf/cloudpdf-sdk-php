<?php

namespace CloudPDF\Types;

enum DocSignaturesAbort200ResponseStatus: string
{
    case Aborted = "aborted";
    case AlreadyCompleted = "already-completed";
    case Unknown = "unknown";
}
