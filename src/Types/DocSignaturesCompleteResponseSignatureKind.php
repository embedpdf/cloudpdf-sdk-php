<?php

namespace CloudPDF\Types;

enum DocSignaturesCompleteResponseSignatureKind: string
{
    case Signature = "signature";
    case Timestamp = "timestamp";
}
