<?php

namespace CloudPDF\Types;

enum DocVersionsSignatures200ResponseSignaturesItemKind: string
{
    case Signature = "signature";
    case Timestamp = "timestamp";
}
