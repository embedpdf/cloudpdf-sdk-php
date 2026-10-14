<?php

namespace CloudPDF\Types;

enum DocManifest200ResponseProtectionFieldLocksItemSpecAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
