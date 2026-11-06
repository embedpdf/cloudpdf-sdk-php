<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysisResponseCurrentPrimaryVerdict: string
{
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Incomplete = "incomplete";
}
