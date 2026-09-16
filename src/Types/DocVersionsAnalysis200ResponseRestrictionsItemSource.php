<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysis200ResponseRestrictionsItemSource: string
{
    case Docmdp = "docmdp";
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
