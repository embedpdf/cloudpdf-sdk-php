<?php

namespace CloudPDF\Types;

enum DocManifestResponseProtectionEnforced: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
