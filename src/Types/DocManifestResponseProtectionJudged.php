<?php

namespace CloudPDF\Types;

enum DocManifestResponseProtectionJudged: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
