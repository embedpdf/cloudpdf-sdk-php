<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysis200ResponseCurrentVerdict: string
{
    case Unchanged = "unchanged";
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Indeterminate = "indeterminate";
}
