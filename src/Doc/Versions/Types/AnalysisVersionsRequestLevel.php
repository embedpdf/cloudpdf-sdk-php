<?php

namespace CloudPDF\Doc\Versions\Types;

enum AnalysisVersionsRequestLevel: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
