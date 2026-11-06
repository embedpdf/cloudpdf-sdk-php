<?php

namespace CloudPDF\Types;

enum DocSignaturesListResponseProtectionEnforced: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
