<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysisResponseCurrentFindingsItemVerdict: string
{
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Incomplete = "incomplete";
}
