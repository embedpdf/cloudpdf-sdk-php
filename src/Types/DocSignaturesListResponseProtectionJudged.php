<?php

namespace CloudPDF\Types;

enum DocSignaturesListResponseProtectionJudged: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
