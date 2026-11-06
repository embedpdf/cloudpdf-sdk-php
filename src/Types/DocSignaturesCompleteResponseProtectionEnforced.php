<?php

namespace CloudPDF\Types;

enum DocSignaturesCompleteResponseProtectionEnforced: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
