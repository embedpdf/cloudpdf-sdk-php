<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysisResponseCurrentVerdict: string
{
    case Unchanged = "unchanged";
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Indeterminate = "indeterminate";
}
