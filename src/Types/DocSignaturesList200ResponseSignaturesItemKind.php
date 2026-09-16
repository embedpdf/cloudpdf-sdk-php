<?php

namespace CloudPDF\Types;

enum DocSignaturesList200ResponseSignaturesItemKind: string
{
    case Signature = "signature";
    case Timestamp = "timestamp";
}
