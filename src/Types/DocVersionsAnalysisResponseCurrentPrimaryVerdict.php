<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysisResponseCurrentPrimaryVerdict: string
{
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Incomplete = "incomplete";
}
