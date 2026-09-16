<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseSignatureKind: string
{
    case Signature = "signature";
    case Timestamp = "timestamp";
}
