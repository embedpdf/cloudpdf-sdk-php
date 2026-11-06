<?php

namespace CloudPDF\Types;

enum DocVersionsSignaturesResponseProtectionJudged: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
