<?php

namespace CloudPDF\Types;

enum DocVersionsSignatures200ResponseProtectionFieldLocksItemSpecAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
