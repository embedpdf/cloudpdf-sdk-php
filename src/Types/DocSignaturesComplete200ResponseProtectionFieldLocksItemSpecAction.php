<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseProtectionFieldLocksItemSpecAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
