<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysisResponseVerdict: string
{
    case Unchanged = "unchanged";
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Indeterminate = "indeterminate";
}
