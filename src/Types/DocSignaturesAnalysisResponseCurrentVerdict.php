<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysisResponseCurrentVerdict: string
{
    case Unchanged = "unchanged";
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Indeterminate = "indeterminate";
}
