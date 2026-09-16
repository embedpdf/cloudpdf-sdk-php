<?php

namespace CloudPDF\Types;

enum DocSignaturesList200ResponseProtectionFieldLocksItemSpecAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
