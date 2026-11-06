<?php

namespace CloudPDF\Types;

enum DocSignaturesListResponseSignaturesItemKind: string
{
    case Signature = "signature";
    case Timestamp = "timestamp";
}
