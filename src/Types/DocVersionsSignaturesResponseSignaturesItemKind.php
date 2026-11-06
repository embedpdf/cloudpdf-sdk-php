<?php

namespace CloudPDF\Types;

enum DocVersionsSignaturesResponseSignaturesItemKind: string
{
    case Signature = "signature";
    case Timestamp = "timestamp";
}
