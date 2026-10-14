<?php

namespace CloudPDF\Types;

enum DocManifest200ResponseProtectionJudged: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
