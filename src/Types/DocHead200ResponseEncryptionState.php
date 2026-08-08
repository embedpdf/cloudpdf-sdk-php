<?php

namespace Cloudpdf\Types;

enum DocHead200ResponseEncryptionState: string
{
    case Unknown = "unknown";
    case None = "none";
    case Encrypted = "encrypted";
    case Unsupported = "unsupported";
}
