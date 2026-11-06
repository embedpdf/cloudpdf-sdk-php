<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysisResponseRestrictionsItemSource: string
{
    case Docmdp = "docmdp";
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
