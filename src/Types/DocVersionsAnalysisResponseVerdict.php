<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysisResponseVerdict: string
{
    case Unchanged = "unchanged";
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Indeterminate = "indeterminate";
}
