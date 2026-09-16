<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseProtectionJudged: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
