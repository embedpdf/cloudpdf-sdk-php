<?php

namespace CloudPDF\Types;

enum DocSignaturesList200ResponseProtectionEnforced: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
