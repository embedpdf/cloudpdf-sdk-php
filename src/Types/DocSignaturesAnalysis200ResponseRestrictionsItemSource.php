<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysis200ResponseRestrictionsItemSource: string
{
    case Docmdp = "docmdp";
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
