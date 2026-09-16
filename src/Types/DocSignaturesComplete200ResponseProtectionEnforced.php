<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseProtectionEnforced: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
