<?php

namespace CloudPDF\Doc\Signatures\Types;

enum AnalysisSignaturesRequestLevel: string
{
    case None = "none";
    case Lta = "lta";
    case Fill = "fill";
    case Annotate = "annotate";
}
