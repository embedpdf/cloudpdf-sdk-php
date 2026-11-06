<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysisResponseCurrentFindingsItemVerdict: string
{
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Incomplete = "incomplete";
}
