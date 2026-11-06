<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysisResponseRestrictionsItemSource: string
{
    case Docmdp = "docmdp";
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
