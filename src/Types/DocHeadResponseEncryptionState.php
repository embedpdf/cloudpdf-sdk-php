<?php

namespace CloudPDF\Types;

enum DocHeadResponseEncryptionState: string
{
    case Unknown = "unknown";
    case None = "none";
    case Encrypted = "encrypted";
    case Unsupported = "unsupported";
}
