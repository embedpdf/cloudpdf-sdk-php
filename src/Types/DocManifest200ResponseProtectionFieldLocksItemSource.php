<?php

namespace CloudPDF\Types;

enum DocManifest200ResponseProtectionFieldLocksItemSource: string
{
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
